<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Helpers\Pay;
use App\Http\Controllers\Controller;
use App\Http\Requests\Payment\PaymentCreate;
use App\Http\Requests\Payment\PaymentUpdate;
use App\Http\Requests\Student\StudentRecordCreate;
use App\Models\Fees;
use App\Models\Setting;
use App\Repositories\MyClassRepo;
use App\Repositories\PaymentRepo;
use App\Repositories\StudentRepo;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;

use App\Models\Applicant;
use App\Models\FeesRecord;
use App\Models\MyClass;
use App\Models\Occasional_Fees;
use App\Models\ParentRecord;
use App\Models\StudentRecord;
use App\Models\SpecialChallan;

class PaymentController extends Controller
{
    protected $my_class, $pay, $student, $year;

    public function __construct(MyClassRepo $my_class, PaymentRepo $pay, StudentRepo $student)
    {
        $this->my_class = $my_class;
        $this->pay = $pay;
        $this->year = Qs::getCurrentSession();
        $this->student = $student;

        $this->middleware('teamAccount');
    }

    public function index()
    {
        $d['selected'] = false;
        $d['years'] = $this->pay->getPaymentYears();

        return view('pages.support_team.payments.index', $d);
    }

    public function show($year)
    {
        $d['payments'] = $p = $this->pay->getPayment(['year' => $year])->get();

        if (($p->count() < 1)) {
            return Qs::goWithDanger('payments.index');
        }

        $d['selected'] = true;
        $d['my_classes'] = $this->my_class->all();
        $d['years'] = $this->pay->getPaymentYears();
        $d['year'] = $year;

        return view('pages.support_team.payments.index', $d);
    }

    public function select_year(Request $req)
    {
        return Qs::goToRoute(['payments.show', $req->year]);
    }

    public function create()
    {
        $d['my_classes'] = $this->my_class->all();
        $d['categories'] = $this->student->getGroups();
        $d['combs'] = $this->student->getCombinations();
      //  $d['particulars'] = Fees::where()->
        return view('pages.support_team.payments.create', $d);
    }

    public function invoice($st_id, $year = NULL)
    {
        if (!$st_id) {
            return Qs::goWithDanger();
        }

        $inv = $year ? $this->pay->getAllMyPR($st_id, $year) : $this->pay->getAllMyPR($st_id);

        $d['sr'] = $this->student->findByUserId($st_id)->first();
        $pr = $inv->get();
        $d['uncleared'] = $pr->where('paid', 0);
        $d['cleared'] = $pr->where('paid', 1);

        return view('pages.support_team.payments.invoice', $d);
    }

    public function receipts($pr_id)
    {
        if (!$pr_id) {
            return Qs::goWithDanger();
        }

        try {
            $d['pr'] = $pr = $this->pay->getRecord(['id' => $pr_id])->with('receipt')->first();
        } catch (ModelNotFoundException $ex) {
            return back()->with('flash_danger', __('msg.rnf'));
        }
        $d['receipts'] = $pr->receipt;
        $d['payment'] = $pr->payment;
        $d['sr'] = $this->student->findByUserId($pr->student_id)->first();
        $d['s'] = Setting::all()->flatMap(function ($s) {
            return [$s->type => $s->description];
        });

        return view('pages.support_team.payments.receipt', $d);
    }

    public function pdf_receipts($pr_id)
    {
        if (!$pr_id) {
            return Qs::goWithDanger();
        }

        try {
            $d['pr'] = $pr = $this->pay->getRecord(['id' => $pr_id])->with('receipt')->first();
        } catch (ModelNotFoundException $ex) {
            return back()->with('flash_danger', __('msg.rnf'));
        }
        $d['receipts'] = $pr->receipt;
        $d['payment'] = $pr->payment;
        $d['sr'] = $sr = $this->student->findByUserId($pr->student_id)->first();
        $d['s'] = Setting::all()->flatMap(function ($s) {
            return [$s->type => $s->description];
        });

        $pdf_name = 'Receipt_' . $pr->ref_no;

        return PDF::loadView('pages.support_team.payments.receipt', $d)->download($pdf_name);

        //return $this->downloadReceipt('pages.support_team.payments.receipt', $d, $pdf_name);
    }

    protected function downloadReceipt($page, $data, $name = NULL)
    {
        $path = 'receipts/file.html';
        $disk = Storage::disk('local');
        $disk->put($path, view($page, $data));
        $html = $disk->get($path);
        return PDF::loadHTML($html)->download($name);
    }

    public function pay_now(Request $req, $pr_id)
    {
        $this->validate($req, [
            'amt_paid' => 'required|numeric'
        ], [], ['amt_paid' => 'Amount Paid']);

        $pr = $this->pay->findRecord($pr_id);
        $payment = $this->pay->find($pr->payment_id);
        $d['amt_paid'] = $amt_p = $pr->amt_paid + $req->amt_paid;
        $d['balance'] = $bal = $payment->amount - $amt_p;
        $d['paid'] = $bal < 1 ? 1 : 0;

        $this->pay->updateRecord($pr_id, $d);

        $d2['amt_paid'] = $req->amt_paid;
        $d2['balance'] = $bal;
        $d2['pr_id'] = $pr_id;
        $d2['year'] = $this->year;

        $this->pay->createReceipt($d2);
        return Qs::jsonUpdateOk();
    }

    public function manage($class_id = NULL)
    {
        $d['my_classes'] = $this->my_class->all();
        $d['selected'] = false;

        if ($class_id) {
            $d['students'] = $st = $this->student->getRecord(['my_class_id' => $class_id])->get()->sortBy('user.name');
            if ($st->count() < 1) {
                return Qs::goWithDanger('payments.manage');
            }
            $d['selected'] = true;
            $d['my_class_id'] = $class_id;
        }

        return view('pages.support_team.payments.manage', $d);
    }

    public function select_class(Request $req)
    {
        $this->validate($req, [
            'my_class_id' => 'required|exists:my_classes,id'
        ], [], ['my_class_id' => 'Class']);

        $wh['my_class_id'] = $class_id = $req->my_class_id;

        $pay1 = $this->pay->getPayment(['my_class_id' => $class_id, 'year' => $this->year])->get();
        $pay2 = $this->pay->getGeneralPayment(['year' => $this->year])->get();
        $payments = $pay2->count() ? $pay1->merge($pay2) : $pay1;
        $students = $this->student->getRecord($wh)->get();

        if ($payments->count() && $students->count()) {
            foreach ($payments as $p) {
                foreach ($students as $st) {
                    $pr['student_id'] = $st->user_id;
                    $pr['payment_id'] = $p->id;
                    $pr['year'] = $this->year;
                    $rec = $this->pay->createRecord($pr);
                    $rec->ref_no ?: $rec->update(['ref_no' => mt_rand(100000, 99999999)]);
                }
            }
        }

        return Qs::goToRoute(['payments.manage', $class_id]);
    }

    public function store(PaymentCreate $req)
    {
        $data = $req->all();
        $data['year'] = $this->year;
        $data['ref_no'] = Pay::genRefCode();
        $this->pay->create($data);

        return Qs::jsonStoreOk();
    }

    public function edit($id)
    {
        $d['payment'] = $pay = $this->pay->find($id);

        return is_null($pay) ? Qs::goWithDanger('payments.index') : view('pages.support_team.payments.edit', $d);
    }

    public function update(PaymentUpdate $req, $id)
    {
        $data = $req->all();
        $this->pay->update($id, $data);

        return Qs::jsonUpdateOk();
    }

    public function destroy($id)
    {
        $this->pay->find($id)->delete();

        return Qs::deleteOk('payments.index');
    }

    public function reset_record($id)
    {
        $pr['amt_paid'] = $pr['paid'] = $pr['balance'] = 0;
        $this->pay->updateRecord($id, $pr);
        $this->pay->deleteReceipts(['pr_id' => $id]);

        return back()->with('flash_success', __('msg.update_ok'));
    }
    public function create_particular(Request $req)
    {
            $fees = new Fees;
            $fees['my_class_id'] = $req->class_id1;
            $fees['combination'] = $req->stu_cat;
            if ($req->fee_cat == 'fbise') {
                $fees['fee_category'] = 'FBISE-FEE';
            }
            if ($req->fee_cat == 'college_funds') {
                $fees['fee_category'] = 'COLLEGE FUNDS';
            }
            if ($req->fee_cat == 'govt_funds') {
                $fees['fee_category'] = 'GOVT FEE';
            }
            $fees['fee_particular'] = $req->fee_particular;
            $fees['amount'] = $req->amount;
            $fees['type'] = 'regular';
            $fees['year'] = Qs::getSetting('current_session');
    
    
            $fees->save();
            return back()->with('flash_success', 'Added Successfully!');
    }

    public function showOccasionalFee(){
       // $data = Fees::all();
        $d['my_classes'] = $this->my_class->all();
        return view('pages.support_team.payments.occasional', $d);
    }
    public function create_occasional_particulars(Request $req){
        $occ = new Occasional_Fees;
        // $st = StudentRecord::where(['name' => $req->st_name, 'roll_no' => $req->st_roll_no])->first(); 
        //  if($st){
        //     $occ['student_roll_no'] = $req->st_roll_no;
        // $occ['student_name'] = $req->st_name;
    //    $st = StudentRecord::where(['name' => $req->student_name, 'roll_no' => $req->student_roll_no])->first(); 
        // $occ['student_id'] = $st->id;
        if ($req->fee_cat == 'fbise_fee') {
            $occ['fee_category'] = 'FBISE-FEE';
        }
        if ($req->fee_cat == 'college_funds') {
            $occ['fee_category'] = 'COLLEGE FUNDS';
        }
        if ($req->fee_cat == 'govt_funds') {
            $occ['fee_category'] = 'GOVT FEE';
        }
       $check =  Occasional_Fees::where(['fee_particular' => $req->fee_particular, 'fee_category'=> $occ['fee_category']])->first();
        if($check){
            return back()->with('flash_danger', 'Record Already Exists');
        }
        $occ['fee_particular'] = $req->fee_particular;
        $occ['amount'] = $req->amount;
        $occ['my_class_id'] = $req->c_id;
        $occ['year'] = Qs::getSetting('current_session');
        $occ->save();
        
        return back()->with('flash_success', 'Record Created');

        //  }
        //  else{
        //     return back()->with('flash_danger', 'Invalid Student Credentials');
        //  }

        }

        public function show_occasional_particulars(Request $req){
            $data['particulars'] = Fees::where('my_class_id', $req->c_id)->get();
            $data['date'] = $req->due_date;
            $data['roll_no'] = $req->roll_no;
            $data['student'] = StudentRecord::where('roll_no', $req->roll_no)->first();
        if(!$data['student']){
            return redirect()->back()->with('flash_danger', 'Invalid Roll No');
        }
            $data['session'] = $req->session;
            return view('pages.support_team.payments.show_particulars',$data);
        }
    public function generateOccasionalChallan(Request $req){
       
        if($req->id == null){
            return redirect('payments/showOccasional')->with('flash_danger','No Fee Particulars Present');
        }
        $parts = $req->id;
        $data = [];
        for ($x = 0; $x < count($parts); $x++) {
            $particulars = Fees::where('id', $parts[$x])->first();
            if($particulars){
                $data['particulars'][] = $particulars;
                $particulars->amount = $req->amount[$x];
            }
          }
          $data['fee_cat'] = [];
        foreach ($data['particulars'] as $row) {
            if (!in_array($row['fee_category'], $data['fee_cat'], true)) {
                array_push($data['fee_cat'], $row['fee_category']);
            }
        }
        $data['date'] = $req->date;
        $data['student'] = StudentRecord::where('roll_no', $req->roll_no)->first();
        
        $data['parent'] = ParentRecord::where('student_id',$data['student']['id'])->first();
        $data['session'] = isset($data['particulars'][0]) ? $data['particulars'][0]['year'] : Qs::getCurrentSession();
        // $check = Occasional_Fees::where(['student_name'=> $req->st_name, 'student_roll_no' => $req->st_roll_no])->first();
        // if(!$check){
        //     return back()->with('flash_danger', 'Invalid Student Credentials');
        // }
        // $data['desc'] = Occasional_Fees::where(['student_name'=> $req->st_name, 'student_roll_no' => $req->st_roll_no])->get();
        // $st = StudentRecord::where(['name'=> $req->st_name, 'roll_no' => $req->st_roll_no])->first();
        // $data['form_no'] = substr($st->form_no,2).''.substr($st->roll_no,4);
        // $p = ParentRecord::where('student_id', $st->id)->first();
        // $data['f_name'] = $p->name;
       // dd($data['particulars']);
        // $data['student'] = $st;

        return view('pages.support_team.students.occasional_challan', $data);

    }

    public function create_special_particulars(Request $req){
        $sp = new SpecialChallan;
        $st = StudentRecord::where('roll_no', $req->roll_no)->first(); 
        if(!$st){
            return back()->with('flash_danger', 'Invalid Roll No');
        }
        $sp['student_id'] = $st->id;
        $sp['student_roll_no'] = $st->roll_no;
        if ($req->fee_cat == 'fbise') {
            $sp['fee_category'] = 'FBISE-FEE';
        }
        if ($req->fee_cat == 'college_funds') {
            $sp['fee_category'] = 'COLLEGE FUNDS';
        }
        if ($req->fee_cat == 'govt_funds') {
            $sp['fee_category'] = 'GOVT FEE';
        }
        $sp['fee_particular'] = $req->fee_particular;
        $sp['amount'] = $req->amount;
        $sp['year'] = Qs::getSetting('current_session');

        $sp->save();
        return back()->with('flash_success', 'Record Created');
    }

    public function generateSpecialChallan(Request $req){
        $chk = SpecialChallan::where('student_roll_no', $req->roll_no)->first();
        if(!$chk){
            return back()->with('flash_danger', 'Invalid Roll No');
        }
        $parts = SpecialChallan::where('student_roll_no', $req->roll_no)->get();
        
        $data['date'] = $req->date;
        $data['student'] = StudentRecord::where('roll_no', $req->roll_no)->first();
        if(!$data['student']){
            return redirect()->back()->with('flash_danger', 'Invalid Roll No');
        }
        
        $data['parent'] = ParentRecord::where('student_id',$data['student']['id'])->first();
        $data['particulars'] = $parts;
        $data['fee_cat'] = [];
        foreach ($data['particulars'] as $row) {
            if (!in_array($row['fee_category'], $data['fee_cat'], true)) {
                array_push($data['fee_cat'], $row['fee_category']);
            }
        }
        $data['session'] = Qs::getSetting('current_session');
        return view('pages.support_team.students.occasional_challan', $data);


    }

    public function fees_records(Request $req){
        $record = new FeesRecord;
        $st = StudentRecord::where('form_no', $req->form_no)->first();
        $record['student_id'] = $st->id;
        $record['due_fees'] = $req->due_fee;
        $record['paid_fees'] = $req->paid_fee;
        $record['balance'] = $req->balance;
        $record['session'] = Qs::getSetting('current_session');

        $record->save();
        
        return redirect('applicants/admitApplicant')->with('flash_success', 'Student Admission Completed');
    }

    public function show_fees_particulars(Request $req){
        $data['class'] = $req->class;
        $data['comb'] = $req->stu_cat;
        $data['particulars'] = Fees::where(['my_class_id' => $data['class'], 'combination' => $data['comb'] ])->get();
        return view('pages.support_team.payments.show_regular',$data);
    }
    
    public function edit_fees_particulars(Request $req)
    {
        if ($req->id == null) {
            return redirect('payments/create')->with('flash_danger', 'No Fee Particulars Selected');
        }
        $particulars = Fees::where('id', $req->id)->first();
        if ($particulars) {
            $particulars->amount = $req->amount;
            $particulars->update();
        }
        // $parts = $req->id;
        // $data = [];
        // for ($x = 0; $x < count($parts); $x++) {
        //     $particulars = Fees::where('id', $parts[$x])->first();
        //     if ($particulars) {
        //         $particulars->amount = $req->amount[$x];
        //         $particulars->update();
        //     }
        // }
        return redirect('payments/create')->with('flash_success', 'Edit Successfull');
    }

    public function delete_fees_particulars(Request $req){
        $part = Fees::where('id', $req->del_id)->first();
        $chk = $part->delete();
        if($chk){
            return redirect('payments/create')->with('flash_success', 'Delete Successfull');
        }
        else{
            return redirect('payments/create')->with('flash_danger', 'Operation Unsuccessfull');
        }
    }
    
}
