<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class garasiModel extends Model
{
    public static function getData($email){
        $data = DB::select('select distinct golongan,id_mobil,jenis_mobil,status from mobil join memiliki using
        (id_mobil)join owner using(email_owner)where email_owner=?',[$email]);
        return $data;
    }

    public static function updateStatus($id,$status){
        // DB::update('update mobil set status=?',[$status],'where id_mobil=?',[$id]);
        DB::table('mobil')
            ->where('id_mobil',$id)
            ->update(['status'=>$status])
            ;

    }
}
