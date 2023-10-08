<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = ['roll_no', 'present', 'leaves', 'absent', 'no_of_lectures', 'subject_id', 'teacher_id', 'from_date', 'to_date', 'remarks'];
}
