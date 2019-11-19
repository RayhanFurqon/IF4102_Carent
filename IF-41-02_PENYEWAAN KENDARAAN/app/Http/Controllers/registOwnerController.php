<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use JD\Cloudder\Facades\Cloudder;
use App\registOwnerModel;

class registOwnerController extends Controller
{
    public function index(){
        return view('registrasi_owner');
    }

    public function submit(Request $req){
        $this->validate($req,[
            'file'=>'required|mimes:jpg,jpeg,png,bmp'
        ]);

        $file = $req->file('file')->getRealPath();;

        Cloudder::upload($file,null);

        list($width,$height) = getimagesize($file);

        $img_url= Cloudder::show(Cloudder::getPublicId(),["width" => $width, "height"=>$height]);

        $email=$req->email;
        $nama=$req->nama;
        $garasi=$req->garasi;
        $alamat=$req->alamat;
        $pass=$req->pass;
        $foto=$img_url;
        
        registOwnerModel::fetch($email,$nama,$garasi,$alamat,$pass,$foto);
        return redirect('/home');
    }
}
