<?php

namespace App\Models;

use Eloquent;

class Nationality extends Eloquent
{
    //
    public static function nation_name($id){
        $data = self::where('id', $id)->first();
        return $data->name;
    }
}
