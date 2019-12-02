<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\bayarModel;
use Redirect;

class bayarController extends Controller
{
    public function bayar(Request $req,$id){
        $email_cust=Session::get('email');
        $email_owner = $id;
        $rand = rand(1,1000000);
        $id_transaksi =$rand;
        $id_memiliki = rand(1,1000000);
        $tgl_transaksi = Carbon::today();
        $total_bayar = $req->total_bayar;
        $metode = $req->metode;
        $durasi = $req->durasi;
        $id_mobil=$req->id_mobil;
        $status = "belum lunas";
        
        bayarModel::addMemiliki($id_memiliki,$email_owner,$id_mobil);
        bayarModel::addBayar($id_transaksi,$email_cust,$id_memiliki,$tgl_transaksi,$total_bayar,$metode,$durasi,$status);
        bayarModel::changeStatus($id_mobil);
        $status_bayar=bayarModel::getStatus($id_transaksi);
        return homeCustController::index()->with('message', 'Silakan melakukan pembayaran sesuai metode');

    }
}
