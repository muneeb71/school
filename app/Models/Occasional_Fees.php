<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occasional_Fees extends Model
{
    use HasFactory;
    protected $fillable = ['id','my_class_id','fee_category','fee_particular','amount','year'];

}
