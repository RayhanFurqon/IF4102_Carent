<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class checkoutCustModel extends Model
{
    public static function getCheckout($email_cust){
       $data = DB::select('select id_transaksi,transaksi.status as status,tgl_transaksi,jenis_mobil,id_mobil,nama_garasi,total_bayar
       from transaksi join memiliki using (id_memiliki) join mobil using(id_mobil) join owner using(email_owner)
       where email_cust=?',[$email_cust]);
       return $data; 
    }
}
