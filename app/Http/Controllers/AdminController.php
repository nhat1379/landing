<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{
    
    public function dashboard() {
        return view('BE.dashboard');
    }

    public function configs(Request $request) {

        if ($request->isMethod('post')) {
            $data = $request->all();

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');
                dd($logo);
            }

            dd($data);
        }

        return view('BE.configs');
    }

    public function menus() {

    }
}
