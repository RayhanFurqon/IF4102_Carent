<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class pesanModel extends Model
{
    public static function getDataOwner($id){
        $data = DB::select('select * from owner where email_owner = ?',[$id]);
        return $data;
    }

    public static function getDataMobil($id){
        $data = DB::select('select distinct jenis_mobil,golongan,id_mobil,harga,foto,status,email_owner from mobil
        join memiliki using (id_mobil) where status="kosong" and email_owner=?',[$id]);
        return $data;
    }
    
}
