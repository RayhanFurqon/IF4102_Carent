<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class profileCustModel extends Model
{
    public static function getDataCust($email_cust){
        $data = DB::select('select email_cust,nama,password,foto_profile from customer where email_cust=?',[$email_cust]);
        return $data;
    }

    public static function changePass($email_cust,$password){
        // DB::update('update customer set password = ?',[$password],'where email_cust=?',[$email_cust]);
        DB::table('customer')
        ->where('email_cust',$email_cust)
        ->update(['password'=>$password]);
        
    }

    public static function updateFoto($email_cust,$img_url){
        // DB::update('update customer set foto_profile = ?',[$img_url],'where email_cust=?',[$email_cust]);
        DB::table('customer')
        ->where('email_cust',$email_cust)
        ->update(['foto_profile'=>$img_url]);
    }

}
