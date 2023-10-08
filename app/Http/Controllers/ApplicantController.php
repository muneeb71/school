<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\LocationRepo;
use App\Repositories\MyClassRepo;
use App\Repositories\StudentRepo;
use App\Repositories\UserRepo;
use App\Helpers\Qs;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    //
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

    public function addApplicant(Request $req){
        $data = new Applicant;
        $data['form_no'] = $req->form_no;
        $data['name'] = ucwords($req->full_name);
        $data['cnic'] = $req->cnic;
        $data['dob'] = $req->dob;
        $data['age'] = $req->age;
        $data['religion'] = $req->religion;
        $data['nationality'] = $req->nationality;
        $data['domicile'] = $req->domicile;
        $data['phone'] = $req->phone;
        $data['quota_name'] = $req->quota;
        $data['group_name'] = $req->group;
        $data['bus'] = $req->bus;
        $data['address'] = $req->address;
        $data['gender'] = $req->gender;
        if ($req->hasFile('photo')) {
            $photo = $req->file('photo');
            $f = Qs::getFileMetaData($photo);
            $f['name'] = 'photo.' . $f['ext'];
            $f['path'] = $photo->storeAs(Qs::getUploadPath('student') . $data['code'], $f['name']);
            $data['photo'] = asset('storage/' . $f['path']);
        }
        
        $data['father_name'] = $req->father_name;
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
        $data['obtained_marks'] = $req->obtained_marks;
        $data['board'] = $req->board;
        $data['institution'] = $req->ins_attented;
        $data['percentage'] = $req->percentage;
        $data['grade'] = $req->grade;
        $data['elective_subjects'] = $req->elective_subjects;
        $data['subject_code'] = $req->combination_code;
        $data['subject_combination'] = $req->combination_sub;
        $data['session'] = Qs::getSetting('current_session');
        $data->save();
        
        return Qs::jsonStoreOk();



    }
}
