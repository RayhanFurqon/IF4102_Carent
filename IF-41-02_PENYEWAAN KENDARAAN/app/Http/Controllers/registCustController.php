<?php

namespace App\Http\Controllers;

use JD\Cloudder\Facades\Cloudder;

use Illuminate\Http\Request;

use App\registCustModel;

class registCustController extends Controller
{
    public function index(){
        return view('registrasi_customer');
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
        $pass=$req->pass;
        $foto=$img_url;
        
        registCustModel::fetch($email,$nama,$pass,$foto);
        return redirect('/home');

    }




}
