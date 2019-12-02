<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\loginModel;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\homeOwnerController;
use App\Http\Controllers\homeCustController;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function auth(Request $req){
        //ambil email pass dari view
        $data=[
            'email' => $req->email,
            'pass' => $req->pass
        ];
        
        //validasi
        if(loginModel::getDataOwner($data)){
            Session::put('email',$data['email']);
            Session::put('login',TRUE);
            return homeOwnerController::index();

        }else if (loginModel::getDataCust($data)){
            Session::put('email',$data['email']);
            Session::put('login',TRUE);
            return homeCustController::index();
        }else{
            var_dump(Session::flash('msg','Email atau Password Salah !'));
            return redirect('login')->with('msg','Password atau Email Salah !');
            
        } 
    }

    public function logout(){
        Session::flush();
        return HomeController::index();
    }
}
