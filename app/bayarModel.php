<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class bayarModel extends Model
{
    public static function addBayar($id_transaksi,$email_cust,$id_memiliki,$tgl_transaksi,$total_bayar,$metode,$durasi,$status){
        DB::table('transaksi')->insert([
            'id_transaksi'=>$id_transaksi,
            'email_cust'=>$email_cust,
            'id_memiliki'=>$id_memiliki,
            'tgl_transaksi'=>$tgl_transaksi,
            'total_bayar'=>$total_bayar,
            'metode'=>$metode,
            'durasi'=>$durasi,
            'status'=>$status
        ]);
    }

    public static function addMemiliki($id_memiliki,$email_owner,$id_mobil){
        DB::table('memiliki')->insert([
            'email_owner'=>$email_owner,
            'id_mobil'=>$id_mobil,
            'id_memiliki'=>$id_memiliki,
        ]);
    }

    public static function getStatus($id_transaksi){
        $data = DB::select('select status from transaksi where id_transaksi=?',[$id_transaksi]);
        return $data;
    }

    public static function changeStatus($id_mobil){
        // DB::update('update mobil set status = "penuh" where id_mobil=?',[$id_mobil]);
        DB::table('mobil')
                    ->where('id_mobil',$id_mobil)
                    ->update(['status'=> "penuh"]);
    }
}
