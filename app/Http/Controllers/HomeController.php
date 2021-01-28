<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Feedback;
use App\Models\Blog;


class HomeController extends Controller{

    public function home() {
        $galleries = Gallery::latest()->take(6)->get();
        $services = Service::latest()->get();
        $feedbacks = Feedback::latest()->get();
        $blogs = Blog::latest()->get();

        if (count($galleries) < 6) {
            $count = 6 - count($galleries);

            for ($i = 0; $i < $count; $i++) {
                $galleries[] = (object) [
                    'is_example' => 1,
                    'title' => 'example ' . $i,
                    'image' => 'https://via.placeholder.com/700x972.png'
                ];
            }
        }

        return view('FE.home.index', compact('galleries', 'services', 'feedbacks', 'blogs'));
    }

    

    
    public function blogs() {
        return view('FE.layouts.master');
    }


}
