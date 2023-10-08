<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialChallan extends Model
{
    use HasFactory;
    protected $fillable = ['id','student_id','student_roll_no','fee_category','fee_particular','amount','year'];


}
