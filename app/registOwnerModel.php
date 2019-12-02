<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class registOwnerModel extends Model
{
    public static function fetch($email,$nama,$garasi,$alamat,$pass,$foto){
        DB::table('owner')->insert([
            'email_owner'=>$email,
            'nama'=>$nama,
            'password'=>$pass,
            'nama_garasi'=>$garasi,         
            'foto_profile'=>$foto,
            'alamat'=>$alamat
        ]);
        
    }
}
