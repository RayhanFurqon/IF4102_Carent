<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\profileOwnerModel;
use JD\Cloudder\Facades\Cloudder;

class profileOwnerController extends Controller
{
    public function index(){
        $email = Session::get('email');
        $data_owner = profileOwnerModel::getDataOwner($email);
        return view('profile-owner',['data_owner'=>$data_owner]);
    }

    public function validasi(Request $req){
        $email = Session::get('email');
        $password = $req->password;
        profileOwnerModel::changePass($email,$password);
        return back();
    }

    public function changeFoto(Request $req){
        $email = Session::get('email');
        $this->validate($req,[
            'file'=>'required|mimes:jpg,jpeg,png,bmp,JPG'
        ]);
        $file = $req->file('file')->getRealPath();
        Cloudder::upload($file,null);
        list($width,$height) = getimagesize($file);
        $img_url= Cloudder::show(Cloudder::getPublicId(),["width" => $width, "height"=>$height]);
        profileOwnerModel::updateFoto($email,$img_url);
        if(!empty($img_url)){
            return back()->with('berhasil','foto profil berhasil diubah !');
        }
    }
        
}
