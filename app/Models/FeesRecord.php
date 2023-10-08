<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesRecord extends Model
{
    use HasFactory;
    protected $fillable = ['id','student_id','due_fees','paid_fees','balance','session'];
}
