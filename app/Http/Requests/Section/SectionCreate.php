<?php

namespace App\Http\Requests\Section;

use App\Helpers\Qs;
use Illuminate\Foundation\Http\FormRequest;

class SectionCreate extends FormRequest
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
            'name' => 'required|string',
            'my_class_id' => 'required',
            'strength' => 'sometimes|nullable',
        ];
    }

    public function attributes()
    {
        return  [
            'my_class_id' => 'Class',
            'strength' => 'strength',
        ];
    }

    // protected function getValidatorInstance()
    // {
    //     $input = $this->all();

    //     $input['teacher_id'] = $input['teacher_id'] ? Qs::decodeHash($input['teacher_id']) : NULL;

    //     $this->getInputSource()->replace($input);

    //     return parent::getValidatorInstance();
    // }

}
