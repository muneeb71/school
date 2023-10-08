<?php

namespace App\Models;

use App\User;
use Eloquent;

class Subject extends Eloquent
{
    protected $fillable = ['name', 'my_class_id','section', 'teacher_id','combination', 'slug'];

    public function my_class()
    {
        return $this->belongsTo(MyClass::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
