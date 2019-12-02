<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\garasiModel;

class garasiController extends Controller
{
    public function index(){
        $email = Session::get('email');
        $data_mobil = garasiModel::getData($email);
        if($data_mobil!=NULL){
            return view('garasi',['data_mobil'=>$data_mobil]); 
        }else{
            return redirect('/home/owner')->with('msg','anda belum mendaftarkan mobil anda !');
        }
        
    }

    public function changestatus(Request $req,$id){
        $status = $req->status;
        garasiModel::updateStatus($id,$status);
        return back();
    }
    
}
