<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;
use App\Helpers\Qs;

class StudentRecordCreate extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'form_no' => 'required|alpha_num|min:3|max:150',
             'full_name' => 'required|string|min:6|max:150',
            'gender' => 'required|string',
            'cnic' => 'required|string|max:15',
            'father_name' => 'required|string|max:150|min:6',
            'year_admitted' => 'required|string',
            'dob' => 'required',
          'roll_no' => 'required',
            'domicile' => 'required',
            'shift' => 'required',
            'qouta' => 'required',
            'category' => 'required',
            'ailment' => 'required',
            'bus' => 'required',
            'eligibilty' => 'required',
            'class' => 'required',
            'section' => 'required',
            'hostel' => 'required',
            'discipline' => 'required',
            'combination' => 'required',
           // 'phone' => 'sometimes|nullable|string|min:6|max:20',
           // 'phone2' => 'sometimes|nullable|string|min:6|max:20',
            'sports' => 'sometimes|nullable|string',
            'total_marks' => 'sometimes|nullable|string',
            'obtained_marks' => 'sometimes|nullable|string',
            'board' => 'sometimes|nullable|string',
            'group' => 'sometimes|nullable|string',
            'ins_attended' => 'sometimes|nullable|string',
            'h_marks' => 'sometimes|nullable|string',
            'prevIns_name' => 'required|string',
            'prevIns_phone' => 'required|string',
           // 'email' => 'sometimes|nullable|email|max:100|unique:users',
           // 'photo' => 'sometimes|nullable|image|mimes:jpeg,gif,png,jpg|max:2048',
           // 'address' => 'required|string|min:6|max:120',
        ];
    }

    // public function attributes()
    // {
    //     return  [
    //         'section_id' => 'Section',
    //         'nal_id' => 'Nationality',
    //         'my_class_id' => 'Class',
    //         'dorm_id' => 'Dormitory',
    //         'state_id' => 'State',
    //         'lga_id' => 'LGA',
    //         'bg_id' => 'Blood Group',
    //         'my_parent_id' => 'Parent',
    //     ];
    // }

    // protected function getValidatorInstance()
    // {
    //     $input = $this->all();

    //     $input['my_parent_id'] = $input['my_parent_id'] ? Qs::decodeHash($input['my_parent_id']) : NULL;

    //     $this->getInputSource()->replace($input);

    //     return parent::getValidatorInstance();
    // }
}
