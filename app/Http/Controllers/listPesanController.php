<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\listPesanModel;

class listPesanController extends Controller
{
    public function index(){
        $email=Session::get('email');
        $transaksi = listPesanModel::getData($email);
        $count = listPesanModel::getCount($email);
        $data_cust = listPesanModel::getDataCust($email);
        return view('listPesan',['transaksi'=>$transaksi],['data_cust'=>$data_cust],['count'=>$count]);
    }

    public function pelunasan(Request $req, $id){
        $email=$id;
        listPesanModel::updateStatus($id);
        return back()->with('message', "Successfully submitted !");

    }
}
