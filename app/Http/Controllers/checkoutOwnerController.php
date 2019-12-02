<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\checkoutOwnerModel;

class checkoutOwnerController extends Controller
{
    public function index(){    
        $email_owner=Session::get('email');
        $checkout = checkoutOwnerModel::getCheckout($email_owner);
        if($checkout!=NULL){
            return view('checkout-owner',['checkout'=>$checkout]);
        }else{
            return redirect('/home/owner')->with('pesan','belum ada yang meminjam mobil anda !');
        }
        
    }
}
