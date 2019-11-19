<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeOwnerController extends Controller
{
    public function index(){
        return view('home_owner');
    }
}
