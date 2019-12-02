<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HomeModel;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index()
    {
        $dataOwner = HomeModel::getData();
        return view('home',['dataOwner'=>$dataOwner]);
    }

}
