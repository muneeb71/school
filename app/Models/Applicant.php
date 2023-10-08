<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = ['name','religion','nationality','domicile', 'phone', 'dob', 'gender', 'photo', 'address','cnic', 'qouta_name', 'group_name','fathers_name','fathers_cnic','fathers_mobile','fathers_address','fathers_designation','guardian_name','guardian_cnic','guardian_mobile','guardian_address','guardian_designation','subject_code','subject_combination','bus','roll_no','yop','marks_obtained','total_marks','percentage','grade','institution','board','subjects'];


}
