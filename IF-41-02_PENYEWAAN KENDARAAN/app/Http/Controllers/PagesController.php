<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function regcus(){
        return view('pages.registration.regiscus');
    }
    public function regown(){
        return view('pages.registration.regisown');
    }
}
