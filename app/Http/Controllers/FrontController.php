<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function upload()
    {
        return view('finalreports.create');    //اسم الصفحة اللي ينتقل عليها  
    }

    public function annou()
    {
        return view('annou'); 
    }
   
}
