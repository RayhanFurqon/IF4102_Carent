<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\checkoutCustModel;


class checkoutCustController extends Controller
{
    public function index(){    
        $email_cust=Session::get('email');
        $checkout = checkoutCustModel::getCheckout($email_cust);
        return view('checkout-cust',['checkout'=>$checkout]);
    }
}
