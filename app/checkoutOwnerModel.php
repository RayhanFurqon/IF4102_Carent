<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class checkoutOwnerModel extends Model
{
    public static function getCheckout($email_owner){
        $data=DB::select('select id_transaksi,tgl_transaksi,jenis_mobil,id_mobil,customer.nama as nama,total_bayar
        ,metode from transaksi join customer using (email_cust) join memiliki using (id_memiliki)
        join mobil using(id_mobil) join owner using(email_owner) where email_owner=? ',[$email_owner]);
        return $data;
    }
}
