<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class pesanModel extends Model
{
    public static function getData($id){
        $data = DB::select('select * from mobil join memiliki using (id_mobil) join owner using(email_owner) where email_owner = ?',[$id]);
        return $data;
    }
    
}
