<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Helpers\Mk;
use App\Http\Requests\Student\StudentRecordCreate;
use App\Http\Requests\Student\StudentRecordUpdate;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;
use App\Repositories\StudentRepo;
use App\Repositories\UserRepo;
use App\Http\Controllers\Controller;
use App\Http\Middleware\Custom\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Applicant;
use App\Models\StudentRecord;
use App\Models\ParentRecord;
use App\Models\Study_Record;
use _ide_helper;
use App\Models\Fees;
use App\Models\FeesRecord;
use App\Models\Section;
use App\Models\MyClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sabberworm\CSS\Settings;
use App\Models\Setting;
use App\Models\Subject;
use Mockery\Undefined;
use Throwable;
use App\User;
use App\Models\Attendance;

class StudentRecordController extends Controller
{
    protected $loc, $my_class, $user, $student;

    public function __construct(LocationRepo $loc, MyClassRepo $my_class, UserRepo $user, StudentRepo $student)
    {
        $this->middleware('teamSA', ['only' => ['edit', 'update', 'reset_pass', 'create', 'store', 'graduated']]);
        $this->middleware('super_admin', ['only' => ['destroy',]]);

        $this->loc = $loc;
        $this->my_class = $my_class;
        $this->user = $user;
        $this->student = $student;
    }

    public function reset_pass($st_id)
    {
        $st_id = Qs::decodeHash($st_id);
        $data['password'] = Hash::make('student');
        $this->user->update($st_id, $data);
        return back()->with('flash_success', __('msg.p_reset'));
    }

    public function create()
    {
        $data['my_classes'] = $this->my_class->all();
        $data['parents'] = $this->user->getUserByType('parent');
        $data['dorms'] = $this->student->getAllDorms();
        $data['states'] = $this->loc->getStates();
        $data['categories'] = $this->student->getCategories();
        $data['nationals'] = $this->loc->getAllNationals();
        $data['quotas'] = $this->student->getQuotas();
        $data['groups'] = $this->student->getGroups();
        $data['combinations'] = $this->student->getCombinations();
        $data['form_no_check'] = Applicant::get(['form_no']);

        return view('pages.support_team.students.addApplicant', $data);
    }

    public function store(Request $req)
    {
        //    $data =  $req->only(Qs::getUserRecord());
        //    $sr =  $req->only(Qs::getStudentData());

        // $ct = $this->my_class->findTypeByClass($req->my_class_id)->code;
        /* $ct = ($ct == 'J') ? 'JSS' : $ct;
        $ct = ($ct == 'S') ? 'SS' : $ct;*/
        $data = new Applicant;
        $chk = Applicant::where('form_no', $req->form_no)->first();
        if ($chk) {
            return back()->with('flash_danger', 'Applicant Already Exist In Records');
        }
        $data['form_no'] = $req->form_no;
        $data['name'] = ucwords($req->full_name);
        $data['cnic'] = $req->cnic;
        $data['dob'] = $req->dob;
        $data['age'] = $req->age;
        $data['religion'] = $req->religion;
        $data['nationality'] = $req->nationality;
        $data['domicile'] = $req->domicile;
        $data['phone'] = $req->phone;
        $data['qouta_name'] = $req->quota_name;
        $data['group_name'] = $req->group_name;
        $data['bus'] = $req->bus;
        $data['address'] = $req->father_off_add;
        $data['gender'] = $req->gender;
        if ($req->hasFile('photo')) {
            $photo = $req->file('photo');
            $f = Qs::getFileMetaData($photo);
            $f['name'] = 'photo.' . $f['ext'];
            $f['path'] = $photo->storeAs(Qs::getUploadPath('student') . $data['code'], $f['name']);
            $data['photo'] = asset('storage/' . $f['path']);
        }

        $data['fathers_name'] = $req->father_name;
        $data['fathers_cnic'] = $req->father_cnic;
        $data['fathers_mobile'] = $req->father_mn;
        $data['fathers_address'] = $req->father_off_add;
        $data['fathers_designation'] = $req->father_occ;
        $data['guardian_name'] = $req->guard_name;
        $data['guardian_cnic'] = $req->guard_cnic;
        $data['guardian_mobile'] = $req->guard_mn;
        $data['guardian_address'] = $req->guard_off_add;
        $data['guardian_designation'] = $req->guard_occ;
        $data['roll_no'] = $req->roll_no;
        $data['yop'] = $req->year_passed;
        $data['total_marks'] = $req->total_marks;
        $data['marks_obtained'] = $req->obtained_marks;
        $data['board'] = $req->board;
        $data['institution'] = $req->ins_attended;
        $data['percentage'] = $req->per;
        $data['grade'] = $req->grade;
        $data['elective_subjects'] = $req->elective_subjects;
        $data['subject_code'] = $req->combination_code;
        $data['subject_combination'] = $req->combination;
        $data['session'] = Qs::getSetting('current_session');
        $data->save();

        return back()->with('flash_success', 'Record Created');
    }

    public function listByClass($class_id)
    {
        // $students = StudentRecord::where('my_class_id', $class_id)->get();
        $data['my_class'] = $mc = $this->my_class->getMC(['id' => $class_id])->first();
        $data['students'] =  StudentRecord::where('my_class_id', $class_id)->get();
        $parent = ParentRecord::get();
        $data['parent'] = [];
        foreach ($data['students'] as $s) {
            for ($i = 0; $i < count($parent); $i++) {
                if ($parent[$i]->student_id == $s->id) {
                    $data['parent'][$i] = $parent[$i];
                }
            }
        }
        // dd($data['parent']);
        // $data['parent'] = ParentRecord::get();
        // $data['sections'] = $this->my_class->getClassSections($class_id);

        return is_null($data) ? Qs::goWithDanger() : view('pages.support_team.students.list', $data);
    }

    public function graduated()
    {
        $data['my_classes'] = $this->my_class->all();
        $data['students'] = $this->student->allGradStudents();

        return view('pages.support_team.students.graduated', $data);
    }

    public function not_graduated($sr_id)
    {
        $d['grad'] = 0;
        $d['grad_date'] = NULL;
        $d['session'] = Qs::getSetting('current_session');
        $this->student->updateRecord($sr_id, $d);

        return back()->with('flash_success', __('msg.update_ok'));
    }

    public function show($sr_id)
    {
        $sr_id = Qs::decodeHash($sr_id);
        if (!$sr_id) {
            return Qs::goWithDanger();
        }

        $data['student_record'] = StudentRecord::where('id', $sr_id)->first();
        $data['study_record'] = Study_Record::where('student_id', $sr_id)->first();
        $data['parent_record'] = ParentRecord::where('student_id', $sr_id)->first();
        return view('pages.support_team.students.show')->with('data', $data);;

        // $data['sr'] = $this->student->getRecord(['id' => $sr_id])->first();

        // /* Prevent Other Students/Parents from viewing Profile of others */
        // if (Auth::user()->id != $data['sr']->user_id && !Qs::userIsTeamSAT() && !Qs::userIsMyChild($data['sr']->user_id, Auth::user()->id)) {
        //     return redirect(route('dashboard'))->with('pop_error', __('msg.denied'));
        // }

    }
    public function meritListOptions()
    {
        $data['quotas'] = $this->student->getQuotas();
        $data['groups'] = $this->student->getGroups();
        $data['combinations'] = $this->student->getCombinations();
        return view('pages.support_team.students.meritList', $data);
    }

    public function meritListGroupOptions()
    {
        $data['quotas'] = $this->student->getQuotas();
        $data['groups'] = $this->student->getGroups();
        return view('pages.support_team.students.meritListGroup', $data);
    }

    public function meritListGroupGenerate(Request $req)
    {
        $data['quota'] = $req->quota_name;
        $data['group'] = $req->group_name;
        $data['number'] = $req->no_of_students;
        $data['due_date'] = $req->due_date;
        $data['applicants'] = Applicant::where(['qouta_name' => $data['quota'], 'group_name' => $data['group'], 'status' => null])->orderBy('percentage', 'desc')->limit($data['number'])->get();

        return view('pages.support_team.students.meritListGroup_show', $data);
        // return view('pages.support_team.students.meritList_show')->with('data', ['applicants' => $apps, 'quota' => $data['quota'], 'group' => $data['group']]);
    }

    public function meritListGenerate(Request $req)
    {
        $data['quota'] = $req->quota_name;
        $data['group'] = $req->group_name;
        $data['combination'] = $req->combination;
        $data['number'] = $req->no_of_students;
        $data['due_date'] = $req->due_date;
        $data['applicants'] = Applicant::where(['qouta_name' => $data['quota'], 'group_name' => $data['group'], 'subject_combination' =>  $data['combination'], 'status' => null])->orderBy('percentage', 'desc')->limit($data['number'])->get();

        return view('pages.support_team.students.meritList_show', $data);
        // return view('pages.support_team.students.meritList_show')->with('data', ['applicants' => $apps, 'quota' => $data['quota'], 'group' => $data['group']]);
    }

    public function getFeeChallan()
    {
        return view('pages.support_team.students.challan_options');
    }
    public function feeChallanGenerate(Request $req)
    {
        $chk = Applicant::where('form_no', $req->form_no)->first();
        if (!$chk) {
            return redirect()->back()->with('flash_danger', 'Invalid Form No');
        }

        $data['applicants'] = Applicant::where('form_no', $req->form_no)->first();
        $data['desc'] = Fees::where(['combination' => $data['applicants']['subject_combination']])->get();
        $data['date'] = Setting::where('type', 'Due_date')->first();
        $data['fee_cat'] = [];
        foreach ($data['desc'] as $row) {
            if (!in_array($row['fee_category'], $data['fee_cat'], true)) {
                array_push($data['fee_cat'], $row['fee_category']);
            }
        }
        if ($data['desc'] && $data['date']) {
            // dd($desc);
            $data['applicants']['challan'] = true;
            $data['applicants']->update();
            $comb = DB::table('elective_combinations')->where('name', $data['applicants']['subject_combination'])->first();
            $data['class'] = MyClass::where('id', $comb->my_class_id)->first();
            return view('pages.support_team.students.challan', $data);
        }
        if (!$data['desc'] || !$data['date']) {
            return redirect()->action([StudentRecordController::class, 'meritListOptions'])->with('flash_danger', 'Fee Particulars Does Not Exist For This Group');
        }
    }
    public function showApplicant()
    {
        $applicants = Applicant::all();
        return view('pages.support_team.students.showApplicants')->with('applicants', $applicants);
    }
    public function showSingleApplicant($id)
    {
        $applicants = Applicant::where('id', $id)->first();
        return view('pages.support_team.students.showSingleApplicant')->with('applicants', $applicants);
    }
    public function showEditApplicant($id)
    {
        $data['applicants'] = Applicant::where('id', $id)->first();
        $data['my_classes'] = $this->my_class->all();
        $data['parents'] = $this->user->getUserByType('parent');
        $data['dorms'] = $this->student->getAllDorms();
        $data['states'] = $this->loc->getStates();
        $data['categories'] = $this->student->getCategories();
        $data['nationals'] = $this->loc->getAllNationals();
        $data['quotas'] = $this->student->getQuotas();
        $data['groups'] = $this->student->getGroups();
        $data['combinations'] = $this->student->getCombinations();
        return view('pages.support_team.students.editApplicant', $data);
    }
    public function editApplicant(Request $req)
    {
        $data = Applicant::where('id', $req->st_id)->first();

        //        dd($req);
        $data->form_no = $req->form_no;
        $data->name = ucwords($req->full_name);
        $data->cnic = $req->cnic;
        $data->dob = $req->dob;
        $data->age = $req->age;
        $data->religion = $req->religion;
        $data->nationality = $req->nationality;
        $data->domicile = $req->domicile;
        $data->phone = $req->phone;
        $data->qouta_name = $req->quota_name;
        $data->group_name = $req->group_name;
        $data->bus = $req->bus;
        $data->address = $req->father_off_add;
        $data->gender = $req->gender;
        if ($req->hasFile('photo')) {
            $photo = $req->file('photo');
            $f = Qs::getFileMetaData($photo);
            $f['name'] = 'photo.' . $f['ext'];
            $f['path'] = $photo->storeAs(Qs::getUploadPath('student') . $data['code'], $f['name']);
            $data['photo'] = asset('storage/' . $f['path']);
        }

        $data->fathers_name = $req->father_name;
        $data->fathers_cnic = $req->father_cnic;
        $data->fathers_mobile = $req->father_mn;
        $data->fathers_address = $req->father_off_add;
        $data->fathers_designation = $req->father_occ;
        $data->guardian_name = $req->guard_name;
        $data->guardian_cnic = $req->guard_cnic;
        $data->guardian_mobile = $req->guard_mn;
        $data->guardian_address = $req->guard_off_add;
        $data->guardian_designation = $req->guard_occ;
        $data->roll_no = $req->roll_no;
        $data->yop = $req->yop;
        $data->total_marks = $req->total_marks;
        $data->marks_obtained = $req->obtained_marks;
        $data->board = $req->board;
        $data->institution = $req->ins_attended;
        $data->percentage = substr(($req->obtained_marks / $req->total_marks) * 100, 0, 6);
        $data->grade = $req->grade;
        $data->elective_subjects = $req->elective_subjects;
        $data->subject_code = $req->combination_code;
        $data->subject_combination = $req->combination;
        $data->session = Qs::getSetting('current_session');

        $data->update();

        return back()->with('flash_success', 'Applicant Edit Successfull');
    }
    public function removeApplicant($id)
    {
        $data = Applicant::where('id', $id)->first();
        $chk = $data->delete();
        if ($chk) {
            return back()->with('flash_success', 'Record Deleted');
        }
    }
    public function admitStudent(Request $req)
    {
        $chk = Applicant::where('form_no', $req->form_no)->first();
        if (!$chk) {
            return redirect()->back()->with('flash_danger', 'Invalid Form No');
        }
        if ($req->type == 'challan') {
            $data['applicants'] = Applicant::where('form_no', $req->form_no)->first();
            $data['desc'] = Fees::where(['combination' => $data['applicants']['subject_combination']])->get();
            $data['date'] = Setting::where('type', 'Due_date')->first();
            $data['fee_cat'] = [];
            foreach ($data['desc'] as $row) {
                if (!in_array($row['fee_category'], $data['fee_cat'], true)) {
                    array_push($data['fee_cat'], $row['fee_category']);
                }
            }
            if ($data['desc'] && $data['date']) {
                // dd($desc);
                $data['applicants']['challan'] = true;
                $data['applicants']->update();
                $comb = DB::table('elective_combinations')->where('name', $data['applicants']['subject_combination'])->first();
                $data['class'] = MyClass::where('id', $comb->my_class_id)->first();
                return view('pages.support_team.students.challan', $data);
            }
            if (!$data['desc'] || !$data['date']) {
                return redirect()->action([StudentRecordController::class, 'meritListOptions'])->with('flash_danger', 'Fee Particulars Does Not Exist For This Group');
            }
        }
        $student = new StudentRecord;
        $p = new ParentRecord;
        $s = new Study_Record;
        $st = new Applicant;
        $g = 0;
        $datas = Applicant::where('form_no', $req->form_no)->get();
        foreach ($datas as $data) {
            // if ($data->religion == null || $data->domicile == null || $data->cnic == null || $data->fathers_cnic == null || $data->fathers_mobile == null || $data->institution == null || $data->elective_subjects == null) {
            //     $data['applicants'] = Applicant::where('id', $req->id)->first();
            //     $data['parents'] = $this->user->getUserByType('parent');
            //     $data['dorms'] = $this->student->getAllDorms();
            //     $data['states'] = $this->loc->getStates();
            //     $data['categories'] = $this->student->getCategories();
            //     $data['nationals'] = $this->loc->getAllNationals();
            //     $data['quotas'] = $this->student->getQuotas();
            //     $data['my_classes'] = $this->my_class->all();
            //     $data['groups'] = $this->student->getGroups();
            //     $data['combinations'] = $this->student->getCombinations();

            //     return view('pages.support_team.students.particulars', $data)
            //         ->with('flash_danger', 'Please Fill Out The Applicant Particulars First');
            // }
            // if ($data->challan == null) {
            //     return redirect('pages.support_team.students.admitApplicant')->with('flash_danger', 'Fees Not Paid');

            // }
            $student['form_no'] = $data->form_no;
            $student['name'] = $data->name;
            $student['cnic'] = $data->cnic;
            $student['dob'] = $data->dob;
            $student['age'] = $data->age;
            $student['religion'] = $data->religion;
            $student['nationality'] = $data->nationality;
            $student['domicile'] = $data->domicile;
            $student['phone'] = $data->phone;
            $student['photo'] = $data->photo;
            $student['qouta_name'] = $data->qouta_name;
            $student['group_name'] = $data->group_name;
            $student['bus'] = $data->bus;
            $student['address'] = $data->address;
            $student['gender'] = $data->gender;
            $student['subject_code'] = $data->subject_code;
            $student['subject_combination'] = $data->subject_combination;
            $dup = StudentRecord::where('form_no', $data->form_no)->first();
            if ($dup || $data->status == 'admitted') {
                return redirect('applicants/admitApplicant')->with('flash_danger', 'Already Admitted');
            }
            if ($data->group_name == 'Pre-engineering') {
                $roll = StudentRecord::where('my_class_id', 1)->max('roll_no');
                $student['my_class_id'] = '1';
                $g = 1;
                if ($roll == null) {
                    $student['roll_no'] = '22PE001';
                } else {
                    if ($roll == '22PE099') {
                        $str3 = substr($roll, 4) + 1;
                        $student['roll_no'] = '22PE' . $str3;
                    } else if (substr($roll, 4) >= '100') {
                        $str4 = substr($roll, 4) + 1;
                        $student['roll_no'] = '22PE' . $str4;
                    } else if (substr($roll, 5) >= '9' && substr($roll, 5) < '99') {
                        $str1 = substr($roll, 5) + 1;
                        $student['roll_no'] = '22PE0' . $str1;
                    } else {
                        $str2 = substr($roll, 6) + 1;
                        $student['roll_no'] = '22PE00' . $str2;
                    }
                }
            }
            if ($data->group_name == 'Pre-medical') {
                $roll = StudentRecord::where('my_class_id', 2)->max('roll_no');
                $student['my_class_id'] = '2';
                $g = 2;
                if (!$roll) {
                    $student['roll_no'] = '22PM001';
                } else {
                    if ($roll == '22PM099') {
                        $str3 = substr($roll, 4) + 1;
                        $student['roll_no'] = '22PM' . $str3;
                    } else if (substr($roll, 4) >= '100') {
                        $str4 = substr($roll, 4) + 1;
                        $student['roll_no'] = '22PM' . $str4;
                    } else if (substr($roll, 5) >= '9' && substr($roll, 5) < '99') {
                        $str1 = substr($roll, 5) + 1;
                        $student['roll_no'] = '22PM0' . $str1;
                    } else {
                        $str2 = substr($roll, 6) + 1;
                        $student['roll_no'] = '22PM00' . $str2;
                    }
                }
                // if(substr($student['roll_no'], 4) > '100'){
                //     $student['section'] = 'C';
                // }
                // else if(substr($student['roll_no'], 4) < '100' && substr($student['roll_no'], 4) > '50'){
                //     $student['section'] = 'B';
                // }
                // else{
                //     $student['section'] = 'A';
                // }

            }
            if ($data->group_name == 'General Science') {
                $roll = StudentRecord::where('my_class_id', 3)->max('roll_no');
                $student['my_class_id'] = '3';
                $g = 3;
                if (!$roll) {
                    $student['roll_no'] = '22GS001';
                } else {
                    if ($roll == '22GS099') {
                        $str3 = substr($roll, 4) + 1;
                        $student['roll_no'] = '22GS' . $str3;
                    } else if (substr($roll, 4) >= '100') {
                        $str4 = substr($roll, 4) + 1;
                        $student['roll_no'] = '22GS' . $str4;
                    } else if (substr($roll, 5) >= '9' && substr($roll, 5) < '99') {
                        $str1 = substr($roll, 5) + 1;
                        $student['roll_no'] = '22GS0' . $str1;
                    } else {
                        $str2 = substr($roll, 6) + 1;
                        $student['roll_no'] = '22GS00' . $str2;
                    }
                }
            }
            if ($data->group_name == 'Humanities') {
                $roll = StudentRecord::where('my_class_id', 4)->max('roll_no');
                $student['my_class_id'] = '4';
                $g = 4;
                if (!$roll) {
                    $student['roll_no'] = '22HA001';
                } else {
                    if ($roll == '22HA099') {
                        $str3 = substr($roll, 4) + 1;
                        $student['roll_no'] = '22HA' . $str3;
                    } else if (substr($roll, 4) >= '100') {
                        $str4 = substr($roll, 4) + 1;
                        $student['roll_no'] = '22HA' . $str4;
                    } else if (substr($roll, 5) >= '9' && substr($roll, 5) < '99') {
                        $str1 = substr($roll, 5) + 1;
                        $student['roll_no'] = '22HA0' . $str1;
                    } else {
                        $str2 = substr($roll, 6) + 1;
                        $student['roll_no'] = '22HA00' . $str2;
                    }
                }
            }
            if ($data->group_name == 'Commerce') {
                $roll = StudentRecord::where('my_class_id', 5)->max('roll_no');
                $student['my_class_id'] = '5';
                $g = 5;
                if (!$roll) {
                    $student['roll_no'] = '22IC001';
                } else {
                    if ($roll == '22IC099') {
                        $str3 = substr($roll, 4) + 1;
                        $student['roll_no'] = '22IC' . $str3;
                    } else if (substr($roll, 4) >= '100') {
                        $str4 = substr($roll, 4) + 1;
                        $student['roll_no'] = '22IC' . $str4;
                    } else if (substr($roll, 5) >= '9' && substr($roll, 5) < '99') {
                        $str1 = substr($roll, 5) + 1;
                        $student['roll_no'] = '22IC0' . $str1;
                    } else {
                        $str2 = substr($roll, 6) + 1;
                        $student['roll_no'] = '22IC00' . $str2;
                    }
                }
            }
            $student['session'] = Qs::getSetting('current_session');
            $sections = Section::where('my_class_id', $g)->get();
            $count = count($sections);
            if (substr($student['roll_no'], 4) % $count == 1 || (substr($student['roll_no'], 4) % $count == 0 && ($count == 1))) {
                $student['section'] = 'A';
            } else if (substr($student['roll_no'], 4) % $count == 2 || (substr($student['roll_no'], 4) % $count == 0 && ($count == 2))) {
                $student['section'] = 'B';
            } else if (substr($student['roll_no'], 4) % $count == 3 || (substr($student['roll_no'], 4) % $count == 0 && ($count == 3))) {
                $student['section'] = 'C';
            } else if (substr($student['roll_no'], 4) % $count == 4 || (substr($student['roll_no'], 4) % $count == 0 && ($count == 4))) {
                $student['section'] = 'D';
            } else if (substr($student['roll_no'], 4) % $count == 0 && $count == 5) {
                $student['section'] = 'E';
            } else {
                return back()->with('flash_danger', 'Error in Section Allotment');
            }
            // dd($student['section']);
            $student['status'] = 'active';
            $student->save();

            $p['name'] = $data->fathers_name;
            $p['cnic'] = $data->fathers_cnic;
            $p['phone'] = $data->fathers_mobile;
            $p['address'] = $data->fathers_address;
            $p['designation'] = $data->fathers_designation;
            $p['student_id'] = $student->id;

            $p->save();

            $s['student_id'] = $student->id;
            $s['roll_no'] = $data->roll_no;
            $s['passing_year'] = $data->yop;
            $s['total_marks'] = $data->total_marks;
            $s['obtained_marks'] = $data->marks_obtained;
            $s['board'] = $data->board;
            $s['ins_attended'] = $data->institution;
            $s['percentage'] = $data->percentage;
            $s['grade'] = $data->grade;
            $s['elective_subjects'] = $data->elective_subjects;
            $s->save();
        }
        $adm = Applicant::where('form_no', $req->form_no)->first();
        $adm['status'] = 'admitted';
        $adm->update();

        $cre['form_no'] = $student->form_no;
        $cre['roll_no'] = $student->roll_no;
        $cre['name'] = $student->name;
        $cre['f_name'] = $p->name;
        $cre['class'] =  $student->my_class_id;
        $cre['section'] =  $student->section;
        $cre['session'] =  Qs::getSetting('current_session');
        $cre['group'] = $student->group_name;
        $cre['combination'] = $student->subject_combination;
        $paid = Fees::where(['combination' => $data->subject_combination])->get();
        $total = 0;
        foreach ($paid as $p) {
            $total += $p->amount;
        }
        $cre['due'] = $total;




        return view('pages.support_team.students.admiss', $cre);
    }
    public function edit($sr_id)
    {
        $sr_id = Qs::decodeHash($sr_id);
        if (!$sr_id) {
            return Qs::goWithDanger();
        }
        $data['categories'] = $this->student->getCategories();
        $data['nationals'] = $this->loc->getAllNationals();
        $data['quotas'] = $this->student->getQuotas();
        $data['groups'] = $this->student->getGroups();
        $data['combinations'] = $this->student->getCombinations();
        $data['student_record'] = StudentRecord::where('id', $sr_id)->first();
        $data['study_record'] = Study_Record::where('student_id', $sr_id)->first();
        $data['parent_record'] = ParentRecord::where('student_id', $sr_id)->first();

        return view('pages.support_team.students.edit')->with('data', $data);
    }

    public function updateStudent(Request $data)
    {
        $st = StudentRecord::where('id', $data->st_id)->first();
        $p = ParentRecord::where('student_id', $st->id)->first();
        $s = Study_Record::where('student_id', $st->id)->first();
        //  dd($data);
        // if ($data->religion == null || $data->domicile == null || $data->cnic == null || $data->father_cnic == null || $data->father_mn == null || $data->ins_attended == null || $data->elective_subjects == null) {
        //     return back()
        //         ->with('flash_danger', 'Please Fill Out The Particulars First');
        // }
        $st['form_no'] = $data->form_no;
        $st['name'] = $data->full_name;
        $st['cnic'] = $data->cnic;
        $st['dob'] = $data->dob;
        $st['age'] = $data->age;
        $st['gender'] = $data->gender;
        $st['photo'] = $data->photo;
        $st['religion'] = $data->religion;
        $st['nationality'] = $data->nationality;
        $st['domicile'] = $data->domicile;
        $st['phone'] = $data->phone;
        $st['qouta_name'] = $data->quota_name;
        // $st['group_name'] = $data->group_name;
        $st['bus'] = $st->bus;
        $st['address'] = $data->father_off_add;
        // $st['subject_code'] = $data->combination_code;
        // $st['subject_combination'] = $data->combination_sub;
        $c_id = DB::table('class_types')->where('name', $data->group_name)->first();
        $c_id = $c_id->id;
        $st['my_class_id'] = $c_id;
        $r = StudentRecord::where('roll_no', $data->current_roll)->first();
        if ($r != null && $r->cnic != $data->cnic) {
            return back()->with('flash_danger', 'Please Enter Valid Roll No');
        } else {
            $st['roll_no'] = $data->current_roll;
        }
        $section_chk = Section::where(['name' => $data->section, 'my_class_id' => $st['my_class_id']])->first();
        if (!$section_chk) {
            return redirect()->back()->with('flash_danger', 'Section Entered Does Not Exist');
        }
        $st['section'] = $data->section;
        $st['session'] = Qs::getSetting('current_session');


        $p['name'] = $data->father_name;
        $p['cnic'] = $data->father_cnic;
        $p['phone'] = $data->father_mn;
        $p['address'] = $data->father_off_add;
        $p['designation'] = $data->father_occ;
        $p['student_id'] = $st->id;

        // $this->student->updateRecord($data->id, $st);
        $st->update();
        $p->update();

        $s['student_id'] = $st->id;
        $s['roll_no'] = $data->roll_no;
        $s['passing_year'] = $data->yop;
        $s['total_marks'] = $data->total_marks;
        $s['obtained_marks'] = $data->obtained_marks;
        $s['board'] = $data->board;
        $s['ins_attended'] = $data->ins_attended;
        $s['percentage'] = $data->percentage;
        $s['grade'] = $data->grade;
        $s['elective_subjects'] = $data->elective_subjects;
        $s->update();


        return back()->with('flash_success', 'Record Updated');
    }

    public function destroy($st_id)
    {
        $st_id = Qs::decodeHash($st_id);
        if (!$st_id) {
            return Qs::goWithDanger();
        }

        $student = StudentRecord::where('id', $st_id)->first();
        $student['status'] = 'withdrawl';
        $student->update();
        return back()->with('flash_success', 'Student Withdrawl Successfull');
    }

    public function generate_roll_no_slip(Request $req)
    {
        $id = $req->id;
        $student = StudentRecord::where('id', $id)->first();
        $cre['form_no'] = $student->form_no;
        $cre['roll_no'] = $student->roll_no;
        $cre['name'] = $student->name;
        $p = ParentRecord::where('student_id', $student->id)->first();
        $cre['f_name'] = $p->name;
        $cre['class'] =  $student->my_class_id;
        $cre['section'] =  $student->section;
        $cre['session'] =  Qs::getSetting('current_session');
        $cre['group'] = $student->group_name;
        $cre['combination'] = $student->subject_combination;

        $fees = FeesRecord::where('student_id', $student->id)->first();
        // dd($fees);
        if (!$fees) {
            $cre['due'] = null;
            $cre['paid'] = null;
            $cre['balance'] = null;
            return view('pages.support_team.students.admission_slip', $cre);
        }
        $cre['due'] = $fees->due_fees;
        $cre['paid'] = $fees->paid_fees;
        $cre['balance'] = $fees->balance;

        return view('pages.support_team.students.admission_slip', $cre);
    }

    public function totalApplicants()
    {
        // $data['PHYCHEMBIO'] = Applicant::where('subject_combination', 'PHY-CHEM-BIO')->get()->count();
        // $data['PHYCHEMMATHS'] = Applicant::where('subject_combination', 'PHY-CHEM-MATHS')->get()->count();
        // $data['MATHSPHYCOMP'] = Applicant::where('subject_combination', 'MATHS-PHY-COMP')->get()->count();
        // $data['MATHSSTATSCOMP'] = Applicant::where('subject_combination', 'MATHS-STATS-COMP')->get()->count();
        // $data['MATHSECOCOMP'] = Applicant::where('subject_combination', 'MATHS-ECO-COMP')->get()->count();
        // $data['ECOGEOHIST'] = Applicant::where('subject_combination', 'ECO-GEO-HIST')->get()->count();
        // $data['ECOPSYCHCIVICS'] = Applicant::where('subject_combination', 'ECO-PSYCH-CIVICS')->get()->count();
        // $data['HPEGEOCIVICS'] = Applicant::where('subject_combination', 'HPE-GEO-CIVICS')->get()->count();
        // $data['HPEPSYCHHIST'] = Applicant::where('subject_combination', 'HPE-PSYCH-HIST')->get()->count();
        // $data['ISLGEOHIST'] = Applicant::where('subject_combination', 'ISL-GEO-HIST')->get()->count();
        // $data['ISLPSYCHCIVCS'] = Applicant::where('subject_combination', 'ISL-PSYCH-CIVCS')->get()->count();
        // $data['total'] = Applicant::get()->count();
        // return view('pages.support_team.students.totalApplicants', $data);
        $data['total'] = Applicant::get()->count();
        $data['my_classes'] = $this->my_class->all();
        $data['combinations'] = $this->student->getCombinations();
        $data['allStu'] = Applicant::all();
        return view('pages.support_team.students.totalApplicants', $data);
    }

    public function totalAdmissions()
    {
        $data['total'] = StudentRecord::get()->count();
        $data['my_classes'] = $this->my_class->all();
        $data['combinations'] = $this->student->getCombinations();
        $data['allStu'] = StudentRecord::all();
        return view('pages.support_team.students.totalAdmissions', $data);
    }
    public function studentsByAge()
    {
        $data['students'] = StudentRecord::get();
        $data['age'] = StudentRecord::select('age')->groupBy('age')->get();
        $data['total'] = StudentRecord::get()->count();

        return view('pages.support_team.students.studentsByAge', $data);
    }
    public function sectionList()
    {
        $data['groups'] = $this->student->getGroups();
        $data['my_classes'] = $this->my_class->all();
        $data['combs'] = $this->student->getCombinations();

        return view('pages.support_team.students.section_list_options', $data);
    }

    public function sectionListGenerate(Request $req)
    {
        $data['students'] = StudentRecord::where(['subject_combination' => $req->combination, 'section' => $req->section])->get();
        $data['class'] = MyClass::class_name($req->class);
        $data['session'] = Qs::getSetting('current_session');
        $data['section'] = $req->section;
        $data['combination'] = $req->combination;
        $parent = ParentRecord::get();
        $study = Study_Record::get();
        $data['parent'] = [];
        $data['study'] = [];
        foreach ($data['students'] as $s) {
            for ($i = 0; $i < count($parent); $i++) {
                if ($parent[$i]->student_id == $s->id) {
                    $data['parent'][$i] = $parent[$i];
                }
                if ($study[$i]->student_id == $s->id) {
                    $data['study'][$i] = $study[$i];
                }
            }
        }
        return view('pages.support_team.students.sectionWiseStudentList', $data);
    }
    public function classListGenerate(Request $req)
    {
        $data['students'] = StudentRecord::where(['my_class_id' => $req->class])->get();
        $data['class'] = MyClass::class_name($req->class);
        $data['session'] = Qs::getSetting('current_session');
        $parent = ParentRecord::get();
        $data['parent'] = [];
        foreach ($data['students'] as $s) {
            for ($i = 0; $i < count($parent); $i++) {
                if ($parent[$i]->student_id == $s->id) {
                    $data['parent'][$i] = $parent[$i];
                }
            }
        }
        return view('pages.support_team.students.classWiseStudentList', $data);
    }
    public function combinationListGenerate(Request $req)
    {
        $data['students'] = StudentRecord::where(['subject_combination' => $req->combination])->get();
        $data['class'] = MyClass::class_name($req->class);
        $data['session'] = Qs::getSetting('current_session');
        // $data['section'] = $req->section;
        $data['combination'] = $req->combination;
        $parent = ParentRecord::get();
        $data['parent'] = [];
        foreach ($data['students'] as $s) {
            for ($i = 0; $i < count($parent); $i++) {
                if ($parent[$i]->student_id == $s->id) {
                    $data['parent'][$i] = $parent[$i];
                }
            }
        }
        return view('pages.support_team.students.combinationWiseStudentList', $data);
    }
    public function groupListGenerate(Request $req)
    {
        $data['students'] = StudentRecord::where(['group_name' => $req->group, 'section' => $req->section])->get();
        $data['session'] = Qs::getSetting('current_session');
        $data['section'] = $req->section;
        $data['group'] = $req->group;
        $parent = ParentRecord::get();
        $data['parent'] = [];
        foreach ($data['students'] as $s) {
            for ($i = 0; $i < count($parent); $i++) {
                if ($parent[$i]->student_id == $s->id) {
                    $data['parent'][$i] = $parent[$i];
                }
            }
        }
        return view('pages.support_team.students.groupWiseList', $data);
    }
    public function readmitStudent()
    {
        return view('pages.support_team.students.reAdmitStudent');
    }

    public function readmitStudentController(Request $req)
    {
        $student = '';
        if ($req->form_no == null) {
            $student = StudentRecord::where('roll_no', $req['roll_no'])->first();
        } else {
            $student = StudentRecord::where('form_no', $req['form_no'])->first();
        }
        $student['status'] = 'active';
        try {
            $student->update();
        } catch (Throwable $e) {
            return back()->with('flash_danger', 'No Record Found');
        }
        return back()->with('flash_success', 'Student Re-admitted');
    }


    public function admitApplicant()
    {
        return view('pages.support_team.students.admitApplicant');
    }

    public function showChangeCombination()
    {
        $data['groups'] = $this->student->getGroups();
        $data['combinations'] = $this->student->getCombinations();

        return view('pages.support_team.students.changeGroup', $data);
    }
    public function changeGroup(Request $req)
    {
        $data = StudentRecord::where('roll_no', $req->roll_no)->first();
        if (!$data) {
            return redirect()->back()->with('flash_danger', 'Invalid Roll No');
        }
        $g = 0;
        if ($req->input_type == 'roll_no') {
            if ($data['group_name'] != $req->group) {
                $data['group_name'] = $req->group;
                $data['subject_combination'] = $req->combination;
                $c_id = DB::table('class_types')->where('name', $data['group_name'])->first();
                $c_id = $c_id->id;
                $data['my_class_id'] = $c_id;
                if ($req->group == 'Pre-engineering') {
                    $roll = StudentRecord::where('my_class_id', 1)->max('roll_no');
                    $g = 1;
                    if ($roll == null) {
                        $data['roll_no'] = '22PE001';
                    } else {
                        if ($roll == '22PE099') {
                            $str3 = substr($roll, 4) + 1;
                            $data['roll_no'] = '22PE' . $str3;
                        } else if (substr($roll, 4) >= '100') {
                            $str4 = substr($roll, 4) + 1;
                            $data['roll_no'] = '22PE' . $str4;
                        } else if (substr($roll, 5) >= '9' && substr($roll, 5) < '99') {
                            $str1 = substr($roll, 5) + 1;
                            $data['roll_no'] = '22PE0' . $str1;
                        } else {
                            $str2 = substr($roll, 6) + 1;
                            $data['roll_no'] = '22PE00' . $str2;
                        }
                    }
                }
                if ($req->group == 'Pre-medical') {
                    $roll = StudentRecord::where('my_class_id', 2)->max('roll_no');

                    $g = 2;
                    if (!$roll) {
                        $data['roll_no'] = '22PM001';
                    } else {
                        if ($roll == '22PM099') {
                            $str3 = substr($roll, 4) + 1;
                            $data['roll_no'] = '22PM' . $str3;
                        } else if (substr($roll, 4) >= '100') {
                            $str4 = substr($roll, 4) + 1;
                            $data['roll_no'] = '22PM' . $str4;
                        } else if (substr($roll, 5) >= '9' && substr($roll, 5) < '99') {
                            $str1 = substr($roll, 5) + 1;
                            $data['roll_no'] = '22PM0' . $str1;
                        } else {
                            $str2 = substr($roll, 6) + 1;
                            $data['roll_no'] = '22PM00' . $str2;
                        }
                    }
                }
                if ($req->group == 'General Science') {
                    $roll = StudentRecord::where('my_class_id', 3)->max('roll_no');

                    $g = 3;
                    if (!$roll) {
                        $data['roll_no'] = '22GS001';
                    } else {
                        if ($roll == '22GS099') {
                            $str3 = substr($roll, 4) + 1;
                            $data['roll_no'] = '22GS' . $str3;
                        } else if (substr($roll, 4) >= '100') {
                            $str4 = substr($roll, 4) + 1;
                            $data['roll_no'] = '22GS' . $str4;
                        } else if (substr($roll, 5) >= '9' && substr($roll, 5) < '99') {
                            $str1 = substr($roll, 5) + 1;
                            $data['roll_no'] = '22GS0' . $str1;
                        } else {
                            $str2 = substr($roll, 6) + 1;
                            $data['roll_no'] = '22GS00' . $str2;
                        }
                    }
                }
                if ($req->group == 'Humanities') {
                    $roll = StudentRecord::where('my_class_id', 4)->max('roll_no');
                    $g = 4;
                    if (!$roll) {
                        $data['roll_no'] = '22HA001';
                    } else {
                        if ($roll == '22HA099') {
                            $str3 = substr($roll, 4) + 1;
                            $data['roll_no'] = '22HA' . $str3;
                        } else if (substr($roll, 4) >= '100') {
                            $str4 = substr($roll, 4) + 1;
                            $data['roll_no'] = '22HA' . $str4;
                        } else if (substr($roll, 5) >= '9' && substr($roll, 5) < '99') {
                            $str1 = substr($roll, 5) + 1;
                            $data['roll_no'] = '22HA0' . $str1;
                        } else {
                            $str2 = substr($roll, 6) + 1;
                            $data['roll_no'] = '22HA00' . $str2;
                        }
                    }
                }
                if ($req->group == 'Commerce') {
                    $roll = StudentRecord::where('my_class_id', 5)->max('roll_no');

                    $g = 5;
                    if (!$roll) {
                        $data['roll_no'] = '22IC001';
                    } else {
                        if ($roll == '22IC099') {
                            $str3 = substr($roll, 4) + 1;
                            $data['roll_no'] = '22IC' . $str3;
                        } else if (substr($roll, 4) >= '100') {
                            $str4 = substr($roll, 4) + 1;
                            $data['roll_no'] = '22IC' . $str4;
                        } else if (substr($roll, 5) >= '9' && substr($roll, 5) < '99') {
                            $str1 = substr($roll, 5) + 1;
                            $data['roll_no'] = '22IC0' . $str1;
                        } else {
                            $str2 = substr($roll, 6) + 1;
                            $data['roll_no'] = '22IC00' . $str2;
                        }
                    }
                }
                $sections = Section::where('my_class_id', $g)->get();
                $count = count($sections);
                if (substr($data['roll_no'], 4) % $count == 1 || (substr($data['roll_no'], 4) % $count == 0 && ($count == 1))) {
                    $data['section'] = 'A';
                } else if (substr($data['roll_no'], 4) % $count == 2 || (substr($data['roll_no'], 4) % $count == 0 && ($count == 2))) {
                    $data['section'] = 'B';
                } else if (substr($data['roll_no'], 4) % $count == 3 || (substr($data['roll_no'], 4) % $count == 0 && ($count == 3))) {
                    $data['section'] = 'C';
                } else if (substr($data['roll_no'], 4) % $count == 4 || (substr($data['roll_no'], 4) % $count == 0 && ($count == 4))) {
                    $data['section'] = 'D';
                } else if (substr($data['roll_no'], 4) % $count == 0 && $count == 5) {
                    $data['section'] = 'E';
                } else {
                    return back()->with('flash_danger', 'Error in Section Allotment');
                }
                $data->update();
                return redirect()->back()->with('flash_success', 'Group Updated');
            } else {
                $data['subject_combination'] = $req->combination;
                $data->update();
                return redirect()->back()->with('flash_success', 'Combination Updated');
            }
        }
    }

    public function showAllotSections()
    {
        $data['my_classes'] = $this->my_class->all();
        $data['groups'] = $this->student->getGroups();
        $data['combinations'] = $this->student->getCombinations();
        return view('pages.support_team.students.allot_sections', $data);
    }
    public function allotSections(Request $req)
    {
        $count = $req->count;
        if ($req->class_id1 == 4) {
            $req_sections = Section::where(['my_class_id' => $req->class_id1])->limit($count)->get();

            $students = StudentRecord::where(['my_class_id' => $req->class_id1])->orderBy('roll_no', 'asc')->get();
            $sec_count = count($req_sections);
            if ($count == 0 || $count > $sec_count) {
                return redirect()->back()->with('flash_danger', 'Invalid Number Of Sections');
            }
            foreach ($req_sections as $r) {
                $r->combination_name = 'ARTS';
                $r->update();
            }
            $i = 0;
            foreach ($students as $s) {
                $s['section'] = $req_sections[$i]['name'];
                $i++;
                if ($i == $sec_count) {
                    $i = 0;
                }
                $s->update();
            }
        } else {
            $req_sections = Section::where(['my_class_id' => $req->class_id1, 'combination_name' => null])->limit($count)->get();

            $students = StudentRecord::where('subject_combination', $req->combination)->orderBy('roll_no', 'asc')->get();

            $sec_count = count($req_sections);
            if ($count == 0 || $count > $sec_count) {
                return redirect()->back()->with('flash_danger', 'Invalid Number Of Sections');
            }
            foreach ($req_sections as $r) {
                $r->combination_name = $req->combination;
                $r->update();
            }
            $i = 0;

            foreach ($students as $s) {
                $s['section'] = $req_sections[$i]['name'];
                $i++;
                if ($i == $sec_count) {
                    $i = 0;
                }
                $s->update();
            }
        }

        return redirect()->back()->with('flash_success', 'Section Allotment Successfull');
    }

    public function removeSections(Request $req)
    {
        if ($req->class_id1 == 4) {
            $req_sections = Section::where(['my_class_id' => $req->class_id1])->get();
            foreach ($req_sections as $r) {
                $r->combination_name = NULL;
                $r->update();
            }
            $students = StudentRecord::where(['my_class_id' => $req->class_id1])->orderBy('roll_no', 'asc')->get();
            foreach ($students as $s) {
                $s['section'] = 'A';
                $s->update();
            }
        } else {
            $req_sections = Section::where(['my_class_id' => $req->class_id1, 'combination_name' => $req->combination])->get();
            foreach ($req_sections as $r) {
                $r->combination_name = NULL;
                $r->update();
            }
            $students = StudentRecord::where('subject_combination', $req->combination)->orderBy('roll_no', 'asc')->get();
            foreach ($students as $s) {
                $s['section'] = 'A';
                $s->update();
            }
        }

        return redirect()->back()->with('flash_success', 'Sections Removed');
    }

    public function updatePercent()
    {
        $app = Applicant::all();
        foreach ($app as $ap) {
            $ap->percentage = (float)substr(($ap->marks_obtained / $ap->total_marks) * 100, 0, 6);
            $ap->update();
        }
        echo 'Updated';
    }
    public function attendanceOptions()
    {
        $user = Auth::user();
        $data['my_classes'] = $this->my_class->all();
        $data['combinations'] = $this->student->getCombinations();



        return view('pages.support_team.subjects.attendance', $data);
    }

    public function showAttendance(Request $req)
    {
        $chk = false;
        $user = Auth::user();
        $section = Section::where('my_class_id', $req->class)->get();
        foreach ($section as $s) {
            if ($s->name == $req->section) {
                $chk = true;
            }
        }
        if (!$chk) {
            return redirect()->back()->with('flash_danger', 'Section Does Not Exist');
        }
        $data['class'] = MyClass::class_name($req->class);
        $data['section'] = $req->section;
        $data['teachers'] = $user;
        if ($user->user_type == 'super_admin') {
            $data['subjects'] = Subject::where('my_class_id', $req->class)->get();
        } else {
            $data['subjects'] = Subject::where('teacher_id', $user->id)->get();
        }
        $data['students'] = StudentRecord::where(['my_class_id' => $req->class, 'section' => $data['section']])->get();
        // dd($data['students']);
        $data['combination'] = $req->combination;
        return view('pages.support_team.subjects.showAttendance', $data);
    }

    public function saveAttendance(Request $req)
    {

        $roll_no = $req->roll_no;
        $present = $req->present;
        $absent = $req->absent;
        $leaves = $req->leaves;
        $remarks = $req->remarks;
        $exists = false;
        $check = Attendance::where(['teacher_id' => Auth::user()->id, 'subject_id' => $req->subject])->get();
        foreach ($check as $att) {
            if (($req->from_date >= $att->from_date && $req->from_date <= $att->to_date) || ($req->from_date <= $att->to_date || $req->to_date <=  $att->to_date)) {
                $exists = true;
            }
        }

        if ($exists) {
            return redirect('students/Attendance')->with('flash_danger', 'Record Already Exists');
        }

        for ($i = 0; $i < count($roll_no); $i++) {
            $record = new Attendance;
            if ($present[$i] != null) {
                $record['roll_no'] = $roll_no[$i];
                $record['present'] = $present[$i];
                $record['leaves'] = $leaves[$i];
                $record['absent'] = $absent[$i];

                $record['remarks'] = $remarks[$i] ? $remarks[$i] : null;
                $record['no_of_lectures'] = $req->no_of_lectures;
                $record['subject_id'] = $req->subject;
                $record['teacher_id'] = Auth::user()->id;
                $record['from_date'] = $req->from_date;
                $record['to_date'] = $req->to_date;

                $record->save();
            } else {
                $record = null;
            }
        }
        return redirect('students/Attendance')->with('flash_success', 'Attendance Entered Successfully');
    }
    public function viewAttendanceOptions()
    {
        $data['groups'] = $this->student->getGroups();
        $data['my_classes'] = $this->my_class->all();
        $data['combinations'] = $this->student->getCombinations();

        if (Auth::user()->user_type == 'super_admin') {
            $data['subjects'] = Subject::get();
        } else {
            $data['subjects'] = Subject::where('teacher_id', Auth::user()->id)->get();
        }
        return view('pages.support_team.subjects.viewAttendanceOptions', $data);
    }
    public function showAttendanceList(Request $req)
    {
        $chk = false;
        $section = Section::where('my_class_id', $req->class)->get();
        foreach ($section as $s) {
            if ($s->name == $req->section) {
                $chk = true;
            }
        }
        if (!$chk) {
            return redirect()->back()->with('flash_danger', 'Section Does Not Exist');
        };

        $data['class'] = MyClass::class_name($req->class);
        $data['section'] = $req->section;
        $data['from_date'] = $req->from_date;
        $data['to_date'] = $req->to_date;
        $data['teachers'] = User::where('id', Auth::user()->id)->first();
        $data['subjects'] = Subject::where('id', $req->subject)->first();
        $attendance = Attendance::where(['subject_id' => $req->subject, 'teacher_id' => Auth::user()->id])->get();
        if (!$attendance) {
            return redirect()->back()->with('flash_danger', 'Attendance Does Not Exist');
        }
        $data['attendance'] = [];
        $data['students'] = [];
        $from = $req->from_date;
        $to = $req->to_date;

        $students = StudentRecord::where(['my_class_id' => $req->class, 'section' => $data['section']])->get();
        for ($i = 0; $i < count($attendance); $i++) {
            //    d($attendance[$i]);
            if ($attendance[$i]->from_date >= $from && $attendance[$i]->to_date <= $to) {
                $data['attendance'][$i] = $attendance[$i];
            }
            for ($j = 0; $j < count($students); $j++) {
                if ($students[$j]->roll_no == $attendance[$i]->roll_no) {
                    $data['students'][$j] = $students[$j];
                }
            }
        }

        if (!$data['attendance']) {
            return redirect()->back()->with('flash_danger', 'Attendance Does Not Exist');
        }
        return view('pages.support_team.subjects.viewAttendance', $data);
    }
    public function viewAttendance(Request $req)
    {
        $chk = false;
        $section = Section::where('my_class_id', $req->class)->get();
        foreach ($section as $s) {
            if ($s->name == $req->section) {
                $chk = true;
            }
        }
        if (!$chk) {
            return redirect()->back()->with('flash_danger', 'Section Does Not Exist');
        }
        $data['class'] = MyClass::class_name($req->class);
        $data['section'] = $req->section;
        $data['teachers'] = Auth::user()->id;
        if (Auth::user()->user_type == 'super_admin') {
            $data['subjects'] = Subject::get();
        } else {
            $data['subjects'] = Subject::where('teacher_id', Auth::user()->id)->get();
        }
        $data['students'] = StudentRecord::where(['my_class_id' => $req->class, 'section' => $data['section']])->get();
        return view('pages.support_team.subjects.showAttendance', $data);
    }
    public function updateAttendanceOptions()
    {
        $data['groups'] = $this->student->getGroups();
        $data['my_classes'] = $this->my_class->all();
        $data['subjects'] = Subject::get();
        $data['teachers'] = User::where('user_type', 'teacher')->get();
        return view('pages.support_team.subjects.updateAttendanceOptions', $data);
    }
    public function updateAttendanceList(Request $req)
    {
        $chk = false;
        $section = Section::where('my_class_id', $req->class)->get();
        foreach ($section as $s) {
            if ($s->name == $req->section) {
                $chk = true;
            }
        }
        if (!$chk) {
            return redirect()->back()->with('flash_danger', 'Section Does Not Exist');
        }
        $data['class'] = MyClass::class_name($req->class);
        $data['section'] = $req->section;
        $data['from_date'] = $req->from_date;
        $data['to_date'] = $req->to_date;
        $data['teachers'] = User::where('id', $req->teacher)->first();
        $data['subjects'] = Subject::where('id', $req->subject)->first();
        $attendance = Attendance::where(['subject_id' => $req->subject, 'teacher_id' => $req->teacher])->get();
        if (!$attendance) {
            return redirect()->back()->with('flash_danger', 'Attendance Does Not Exist');
        }
        $data['attendance'] = [];
        $data['students'] = [];
        $from = $req->from_date;
        $to = $req->to_date;
        $students = StudentRecord::where(['my_class_id' => $req->class, 'section' => $data['section']])->get();
        for ($i = 0; $i < count($attendance); $i++) {
            if (($attendance[$i]->from_date >= $from || $from > $attendance[$i]->from_date) && $attendance[$i]->to_date <= $to) {
                $data['attendance'][$i] = $attendance[$i];
            }
            for ($j = 0; $j < count($students); $j++) {
                if ($students[$j]->roll_no == $attendance[$i]->roll_no) {
                    $data['students'][$j] = $students[$j];
                }
            }
        }
        if (!$data['attendance']) {
            return redirect()->back()->with('flash_danger', 'Attendance Does Not Exist');
        }
        return view('pages.support_team.subjects.updateAttendance', $data);
    }

    public function updateAttendance(Request $req)
    {
        $roll_no = $req->roll_no;
        $present = $req->present;
        $absent = $req->absent;
        $leaves = $req->leaves;
        $remarks = $req->remarks;
        $subject = Subject::where(['teacher_id' =>  $req->teacher, 'name' =>  $req->subject])->first();
        $subject = $subject->id;
        for ($i = 0; $i < count($roll_no); $i++) {
            $record = Attendance::where(['roll_no' => $roll_no[$i], 'from_date' => $req->from_date, 'to_date' => $req->to_date])->first();
            if ($present[$i] != null && $absent[$i] != null && $leaves[$i] != null && $remarks[$i] != null) {
                $record->roll_no = $roll_no[$i];
                $record->present = $present[$i];
                $record->leaves = $leaves[$i];
                $record->absent = $absent[$i];
                $record->remarks = $remarks[$i];
                // $record->no_of_lectures = $req->no_of_lectures;
                $record->subject_id = $subject;
                $record->teacher_id = $req->teacher;
                $record->from_date = $req->from_date;
                $record->to_date = $req->to_date;

                $record->update();
            }
        }
        return redirect('students/Attendance')->with('flash_success', 'Attendance Updated Successfully');
    }
    public function attendanceReportOptions()
    {
        $data['combinations'] = $this->student->getCombinations();
        return view('pages.support_team.subjects.attendanceReportOptions', $data);
    }

    public function generateAttendanceReport(Request $req)
    {
        $data['attendance'] = [];
        $from = $req->from_date;
        $to = $req->to_date;
        $data['student'] = StudentRecord::where('roll_no', $req->roll_no)->first();
        $data['parent'] = ParentRecord::where('student_id', $data['student']['id'])->first();
        $subjects = Subject::where(['my_class_id' =>  $data['student']['my_class_id'], 'combination' => $req->combination])->get();
        $data['to'] = $to;
        $data['from'] = $from;
        $attendance = Attendance::where(['roll_no' =>  $req->roll_no, 'from_date' => $from, 'to_date' => $to])->get();
        if (count($attendance) == 0) {
            return redirect()->back()->with('flash_danger', 'Attendance Does Not Exist');
        }
        for ($i = 0; $i < count($attendance); $i++) {
            if (($attendance[$i]->from_date >= $from || $from > $attendance[$i]->from_date) && $attendance[$i]->to_date <= $to) {
                $data['attendance'][$i] = $attendance[$i];
                if ($attendance[$i]->subject_id == $subjects[$i]->id) {
                    $data['subjects'][$i] = $subjects[$i];
                }
            }
        }

        return view('pages.support_team.subjects.attendanceReportSingle', $data);

        // dd($data);
    }
    public function monthlyAttendanceReportOptions()
    {
        $data['my_classes'] = $this->my_class->all();
        $data['combinations'] = $this->student->getCombinations();
        return view('pages.support_team.subjects.monthlyReportOptions', $data);
    }

    public function generateMonthlyAttendanceReport(Request $req)
    {
        if ($req->combination && ($req->class == 3 || $req->class == 4)) {
            $subjects = Subject::where(['my_class_id' => $req->class, 'combination' => $req->combination, 'section' => $req->section])->get();
        } else {
            $subjects = Subject::where(['my_class_id' => $req->class, 'combination' => null, 'section' => $req->section])->get();
        }

        $attendance = Attendance::where(['from_date' => $req->from, 'to_date' => $req->to])->get();
        if ($attendance->isEmpty()) {
            return redirect()->back()->with('flash_danger', 'Attendance Does Not Exist!');
        } else {
            for ($i = 0; $i < count($subjects); $i++) {
                $att[$subjects[$i]->name] = Attendance::where(['from_date' => $req->from, 'to_date' => $req->to, 'subject_id' => $subjects[$i]->id])->get()->count();
            }
            $data['subjects'] = $subjects;
            $data['from'] =  $req->from;
            $data['to'] = $req->to;
            $data['class'] = MyClass::class_name($req->class);
            $data['section'] = $req->section;
            $data['record'] = $att;
        }


        return view('pages.support_team.subjects.monthlyReport', $data);
    }
}
    // add applicant
    // public function addApplicant()
    // {
    //     $data['my_classes'] = $this->my_class->all();
    //     $data['parents'] = $this->user->getUserByType('parent');
    //     $data['dorms'] = $this->student->getAllDorms();
    //     $data['states'] = $this->loc->getStates();
    //     $data['categories'] = $this->student->getCategories();
    //     $data['nationals'] = $this->loc->getAllNationals();
    //     $data['quotas'] = $this->student->getQuotas();
    //     $data['groups'] = $this->student->getGroups();
    //     $data['combinations'] = $this->student->getCombinations();
    //     return view('pages.support_team.students.addApplicant');
    // }
// $data['user_type'] = 'student';
//         $data['name'] = ucwords($req->name);
//         $data['email'] = $req->email;
//         $data['phone'] = $req->phone;
//         $data['phone2'] = $req->phone2;
//         $data['dob'] = $req->dob;
//         $data['address'] = $req->address;
//         $data['gender'] = $req->gender;
//         $data['cnic'] = $req->cnic;
//         // $data['code'] = strtoupper(Str::random(10));
//         $data['password'] = Hash::make('student');
//         $data['photo'] = Qs::getDefaultUserImage();
//         $adm_no = $req->adm_no;
//         $data['username'] = strtoupper(Qs::getAppCode() . '/' . $req->my_class_id . '/' . $req->year_admitted . '/' . ($adm_no ?: mt_rand(1000, 99999)));

//         if ($req->hasFile('photo')) {
//             $photo = $req->file('photo');
//             $f = Qs::getFileMetaData($photo);
//             $f['name'] = 'photo.' . $f['ext'];
//             $f['path'] = $photo->storeAs(Qs::getUploadPath('student') . $data['code'], $f['name']);
//             $data['photo'] = asset('storage/' . $f['path']);
//         }

//         $user = $this->user->create($data); // Create User

//         $sr['form_no'] = $req->form_no;
//         $sr['father_name'] = $req->father_name;
//         $sr['roll_no'] = $req->roll_no;
//         $sr['year_admitted'] = $req->year_admitted;
//         $sr['sports'] = $req->sports;
//         $sr['h_marks'] = $req->h_marks;
//         $sr['prevIns_name'] = $req->prevIns_name;
//         $sr['prevIns_phone'] = $req->prevIns_phone;
//         $sr['h_marks'] = $req->h_marks;
//         $sr['year_admitted'] = $req->year_admitted;
//         $sr['user_id'] = $user->id;
//         $sr['session'] = Qs::getSetting('current_session');

//         $this->student->createRecord($sr); // Create Student

//         $rec['user_id'] = $user->id;
//         $rec['total_marks'] = $req->total_marks;
//         $rec['obtained_marks'] = $req->obtained_marks;
//         $rec['board'] = $req->board;
//         $rec['group'] = $req->group;
//         $rec['ins_attended'] = $req->ins_attended;
//         $this->student->createStudyRecord($rec);


//         return Qs::jsonStoreOk();