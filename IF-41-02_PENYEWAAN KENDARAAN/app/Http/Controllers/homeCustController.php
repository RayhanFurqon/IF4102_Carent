<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\homeCustModel;

class homeCustController extends Controller
{
    public static function index(){
        $email=Session::get('email');
        $data = homeCustModel::getData($email);
        $garasi = homeCustModel::getOwner();
        return view('home_cust',['data_cust'=>$data],['garasi'=>$garasi]);
    }
}
