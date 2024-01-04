<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar ="Kuy";
    public function index()
    {


    return view('home');



    }
    function __construct()
    {

    }
    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myrount',$data);
    }

}
