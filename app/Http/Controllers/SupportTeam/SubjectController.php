<?php

namespace App\Http\Controllers\SupportTeam;

use App\Helpers\Qs;
use App\Http\Requests\Subject\SubjectCreate;
use App\Http\Requests\Subject\SubjectUpdate;
use App\Repositories\MyClassRepo;
use App\Repositories\StudentRepo;
use App\Repositories\UserRepo;
use App\Models\Subject;
use App\Models\Attendance;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    protected $my_class, $user, $student;

    public function __construct(MyClassRepo $my_class, UserRepo $user, StudentRepo $student)
    {
        $this->middleware('teamSA', ['except' => ['destroy',] ]);
        $this->middleware('super_admin', ['only' => ['destroy',] ]);

        $this->my_class = $my_class;
        $this->user = $user;
                $this->student = $student;

    }

    public function index()
    {
        $d['my_classes'] = $this->my_class->all();
        $d['teachers'] = $this->user->getUserByType('teacher');
        $d['subjects'] = $this->my_class->getAllSubjects();
        $d['combinations'] = $this->student->getCombinations();
    
        return view('pages.support_team.subjects.index', $d);
    }

    public function store(SubjectCreate $req)
    {
        $data = $req->all();
        $data['name'] = strtoupper($data['name']);
        $exists = Subject::where(['my_class_id'=> $req->my_class_id, 'section' => $req->section, 'name' => strtoupper($req->name)])->first();
        if($exists){
            return redirect()->back()->with('flash_danger', 'Subject Already Exists in Required Section');
        }
        $this->my_class->createSubject($data);

        return redirect()->back()->with('flash_success', 'Record Created');
    }
 
    public function edit($id)
    {
        $d['s'] = $sub = $this->my_class->findSubject($id);
        $d['my_classes'] = $this->my_class->all();
        $d['teachers'] = $this->user->getUserByType('teacher');
        $d['combination'] = $this->student->getCombinations();

        return is_null($sub) ? Qs::goWithDanger('subjects.index') : view('pages.support_team.subjects.edit', $d);
    }

    public function update(SubjectUpdate $req, $id)
    {
        $data = $req->all();
        $this->my_class->updateSubject($id, $data);

        return redirect()->back()->with('flash_success', 'Edit Successfull');
    }

    public function destroy($id)
    {
        $data = Attendance::where('subject_id', $id)->get();
        if($data){
            foreach($data as $record){
                $record->delete();
            }
        }
        $this->my_class->deleteSubject($id);
        return back()->with('flash_success', __('msg.del_ok'));
            
    }
}
