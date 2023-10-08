<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study_Record extends Model
{
    use HasFactory;

    protected $fillable = [
    'id','student_id','roll_no','passing_year','percentage','grade','elective_subjects','total_marks', 'obtained_marks', 'board', 'ins_attended'
    ];

    public function student()
    {
        return $this->belongsTo(StudentRecord::class);
    }
}
