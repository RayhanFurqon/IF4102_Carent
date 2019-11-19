<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pesanModel;

class pesanController extends Controller
{
    public function index(){
        return view('/pesan');
    }

    public function getOwner($id){
        $email = $id;
        $data = pesanModel::getData($email);
        return view('/pesan',['daftarmenu'=>$data]);
    }
}
