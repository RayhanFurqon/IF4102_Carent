<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class profileOwnerModel extends Model
{
    public static function getDataOwner($email_owner){
        $data = DB::select('select email_owner,nama,password,foto_profile from owner where email_owner=?',[$email_owner]);
        return $data;
    }

    public static function changePass($email_owner,$password){
        // DB::update('update owner set password = ?',[$password],'where email_owner=?',[$email_owner]);
        DB::table('owner')
        ->where('email_owner',$email_owner)
        ->update(['password'=>$password]);
        
    }

    public static function updateFoto($email_owner,$img_url){
        // DB::update('update owner set foto_profile = ?',[$img_url],'where email_owner=?',[$email_owner]);
        DB::table('owner')
        ->where('email_owner',$email_owner)
        ->update(['foto_profile'=>$img_url]);
    }

}
