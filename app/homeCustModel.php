<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class homeCustModel extends Model
{
    public static function getData($email){
        $cust=DB::table('customer')
                    ->where('email_cust',$email)
                    ->get();
        return $cust;
    }

    public static function getOwner(){
        $data=DB::table('owner')
                    ->get();
        return $data;
    }
}
