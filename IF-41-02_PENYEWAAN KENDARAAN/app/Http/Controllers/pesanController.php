<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\pesanModel;
Use Alert;

class pesanController extends Controller
{
    public function index(){
        return view('/pesan');
    }

    public function getOwner($id){
        $email = $id;
        $data = pesanModel::getDataOwner($email);
        $mobil = pesanModel::getDataMobil($email);
        if($mobil!=NULL){
            return view('/pesan',['daftarmenu'=>$data],['daftarmobil'=>$mobil]);
        }else{
            Session::flash('warn','Maaf Lagi Dipinjem Semua :( ');
            return redirect('/home/customer')->with('warn','Maaf Lagi Dipinjem Semua :( ');
        }
        
    }

    public function pesan(Request $req,$id){
        $durasi = $req->durasi;
        $harga = $req->harga;
        $harga_total = $harga * $durasi;
        $email = $id;
        $data = [
            'email' => $email,
            'durasi' =>$durasi,
            'id_mobil' => $req->id_mobil,
            'jenis_mobil' => $req->jenis_mobil,
            'golongan' => $req->golongan,
            'harga_total' => $harga_total
        ];
        return view('bayar',['pesanan'=>$data]);


       

    }
}
