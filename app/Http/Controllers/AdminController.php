<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Config;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Feedback;
use App\Models\Team;

class AdminController extends Controller{

    public function dashboard() {
        $items = [
            'blog' => [
                'count' => Blog::count(),
                'icon' => 'fa fa-rss',
                'color' => '#8e44ad',
                'label' => 'Số lượng Blog',
                'url' => 'be.blogs.index'
            ],
            'gallery' => [
                'count' => Gallery::count(),
                'icon' => 'fa fa-picture-o',
                'color' => '#2980b9',
                'label' => 'Số lượng ảnh',
                'url' => 'be.galleries.index'
            ],
            'feedback' => [
                'count' => Feedback::count(),
                'icon' => 'fa fa-commenting-o',
                'color' => '#e74c3c',
                'label' => 'Số lượng Feedback',
                'url' => 'be.feedbacks.index'
            ],
            'Team' => [
                'count' => Team::count(),
                'icon' => 'fa fa fa-users',
                'color' => '#16a085',
                'label' => 'Số lượng nhân viên',
                'url' => 'be.teams.index'
            ]
        ];

        return view('BE.dashboard', compact('items'));
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
        $menus = [
            'home' => ['key' => 'home', 'label' => 'Home', 'ative' => 1],
            'blog' => ['key' => 'blog', 'label' => 'Blog', 'ative' => 1],
            'about' => ['key' => 'about', 'label' => 'Về chúng tôi', 'ative' => 1],
            'contract' => ['key' => 'contract', 'label' => 'Liên hệ', 'ative' => 1]
        ];

        return view('BE.menus', compact('menus'));
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

                if (strpos($file->getClientMimeType(), 'image/') === false) {
                    return back()->withInput()->with('error_notify', 'Ảnh sai định dạng');
                }

                $data['big_banner_image'] = $file->store("logos", "public");
            }else {
                $data['big_banner_image'] = $home['big_banner_image'] ?? '';
            }

            if ($request->hasFile('about_image')) {
                $file = $request->file('about_image');

                if (strpos($file->getClientMimeType(), 'image/') === false) {
                    return back()->withInput()->with('error_notify', 'Ảnh sai định dạng');
                }

                $data['about_image'] = $file->store("logos", "public");
            }else {
                $data['about_image'] = $home['about_image'] ?? '';
            }

            $config->name = 'home';
            $config->value = json_encode($data);
            $config->save();

            return back()->with('success_notify', 'Thao tác thành công!');
        }

        return view('BE.configs.home', compact('home'));
    }
}
