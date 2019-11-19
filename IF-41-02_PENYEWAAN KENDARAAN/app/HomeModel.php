<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class HomeModel extends Model
{
    public static function getData(){
        $owner = DB::table('owner')->get();
        return $owner;
    }
}
