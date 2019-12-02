<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class homeOwnerModel extends Model
{
    public static function getData($email){
        $owner=DB::table('owner')
                    ->where('email_owner',$email)
                    ->get();
        return $owner;
    }
}
