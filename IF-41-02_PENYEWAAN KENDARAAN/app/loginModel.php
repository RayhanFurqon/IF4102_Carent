<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    public static function getDataCust($data){
        $cust = DB::table('customer')
                    ->where('email_cust',$data['email'])
                    ->where('password',$data['pass'])
                    ->get();
        if(count($cust)>0){
            return true;
        }else{
            return false;
        }
    }

    public static function getDataOwner($data){
        $owner = DB::table('owner')
                    ->where('email_owner',$data['email'])
                    ->where('password',$data['pass'])
                    ->get();
        if(count($owner)>0){
            return true;
        }else{
            return false;
        }
    }
}
