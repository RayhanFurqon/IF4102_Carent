<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\profileCustModel;
use JD\Cloudder\Facades\Cloudder;

class profileCustController extends Controller
{
    public function index(){
        $email = Session::get('email');
        $data_cust = profileCustModel::getDataCust($email);
        return view('profile-cust',['data_cust'=>$data_cust]);
    }

    public function validasi(Request $req){
        $email = Session::get('email');
        $password = $req->password;
        profileCustModel::changePass($email,$password);
        return back();
    }

    public function changeFoto(Request $req){
        $email = Session::get('email');
        $v = $this->validate($req,[
            'file'=>'required|mimes:jpg,jpeg,png,bmp'
        ]);
        $file = $req->file('file')->getRealPath();
        Cloudder::upload($file,null);
        list($width,$height) = getimagesize($file);
        $img_url= Cloudder::show(Cloudder::getPublicId(),["width" => $width, "height"=>$height]);
        profileCustModel::updateFoto($email,$img_url);
        if(!empty($img_url)){
            return back()->with('berhasil','foto profil berhasil diubah !');
        }
        
    }
}
