<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\registCustController;

use DB;

class registCustModel extends Model
{
    public static function fetch($email,$nama,$pass,$foto){
        DB::table('customer')->insert([
            'email_cust'=>$email,
            'nama'=>$nama,
            'password'=>$pass,
            'foto_profile'=>$foto
        ]);
        
    }
}
