<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Feedback;
use App\Models\Blog;


class HomeController extends Controller{

    public function home() {

        $services = Service::latest()->get();
        $feedbacks = Feedback::latest()->get();
        $blogs = Blog::with('author')->latest()->take(3)->get();

        return view('FE.home.index', compact('services', 'feedbacks', 'blogs'));
    }


    public function blogs() {
        $blogs = Blog::with('author')->latest()->paginate(10);

        return view('FE.blogs.list', compact('blogs'));
    }

    public function blog($id) {
        $blog = Blog::findOrFail($id);

        $relates = Blog::inRandomOrder()
            ->where('id', '!=', $id)
            ->take(2)->get();

        return view('FE.blogs.detail', compact('blog', 'relates'));
    }

    public function blogCmt(Request $request, $id) {
        $data = $request->except('_token');

        $blog = Blog::findOrFail($id);

    }

    public function search(Request $request) {
        $blogs = Blog::where('title', 'like', '%'.$request->s.'%')->paginate(10);

        return view('FE.search', compact('blogs'));
    }

    public function about() {

        return view('FE.about');
    }

    public function contact() {

        return view('Fe.contact');
    }
}
