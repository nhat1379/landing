<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller{

    public function dashboard() {
        return view('BE.dashboard');
    }

    public function configs(Request $request) {
        $config = Config::where('name', 'website')->first();

        if (!$config) {
            $config = new Config();
        }

        $web = [];

        if ($config) {
            $web = json_decode($config['value'], true);
        }

        if ($request->isMethod('post')) {
            $data = $request->except('_token');

            if ($request->hasFile('logo')) {
                $logo = $request->file('logo');

                if (strpos($logo->getClientMimeType(), 'image/') === false) {
                    return back()->withInput()->with('error_notify', 'Ảnh sai định dạng');
                }

                $data['logo'] = $logo->store("logos", "public");
            }else {
                $data['logo'] = $web['logo'] ?? '';
            }

            if ($config->id) {
                $config->value = json_encode($data);
            }else {
                $config->name = 'website';
                $config->value = json_encode($data);
            }
            $config->save();

            return back()->with('success_notify', 'Lưu thành công');
        }

        return view('BE.configs', compact('web'));
    }

    public function menus() {

    }

    public function home(Request $request) {
        $config = Config::where('name', 'home')->first();

        if ($config) {
            $home = json_decode($config['value'], true);
        }else {
            $config = new Config();
            $home = [];
        }


        if ($request->isMethod('post')) {   
            $data = $request->except('_token');
            
            if ($request->hasFile('big_banner_image')) {
                $file = $request->file('big_banner_image');
                $path = $file->store('images');
                $data['big_banner_image'] = $path;
            }
        
            $config->name = 'home';
            $config->value = json_encode($data);
            $config->save();
            
            return back()->with('success_notify', 'Thao tác thành công!');
        }

        return view('BE.configs.home', compact('home')); 
    }
}
