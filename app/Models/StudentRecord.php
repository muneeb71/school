<?php

namespace App\Models;

use App\User;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentRecord extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'id','form_no', 'my_class_id' ,'section','roll_no', 'name', 'age', 'religion',  'nationality', 'domicile', 'phone', 'dob', 'gender', 'address', 'cnic','photo','qouta_name','group_name','subject_code','subject_combination'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function my_parent()
    {
        return $this->belongsTo(User::class);
    }

    public function my_class()
    {
        return $this->belongsTo(MyClass::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

}
