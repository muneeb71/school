<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentRecord extends Model
{
    use HasFactory;
    protected $fillable = ['id','student_id', 'name','cnic','address','phone','designation'];

}
