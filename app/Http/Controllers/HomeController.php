<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{

    public function home() {
        return view('FE.home.index');
    }

    

    
    public function blogs() {
        return view('FE.layouts.master');
    }


}