<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class listPesanModel extends Model
{
    public static function getDataCust($email_cust){
        $data = DB::select('select email_cust,nama,password,foto_profile from customer where email_cust=?',[$email_cust]);
        return $data;
    }
    
    public static function getData($email_cust){
        $data = DB::select('select * from transaksi where status="belum lunas" and email_cust=? ',[$email_cust]);
        return $data;
    }

    public static function getCount($email_cust){
        $data = DB::select('select count(*) as jumlah from transaksi where email_cust=? ',[$email_cust]);
        return $data;
    }

    public static function updateStatus($id_transaksi){
        DB::update('update transaksi set status="lunas" where id_transaksi=?',[$id_transaksi]);
    }


}
