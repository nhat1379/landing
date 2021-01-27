<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Blog::latest()->get();

        return view('BE.blog.list', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new Blog();

        return view('BE.blog.edit', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $data = $request->except('_token');

        $data['created_by'] = 1; //Auth::user()->id;
        if ($request->hasFile('thumb')) {
            $data['thumb'] = $request->file('thumb')->store('blogs');
        }

        Blog::create($data);
        
        return redirect()->route('be.blogs.index')->with('success_notify', 'Thêm Blog thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('BE.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $data = $request->except('_token');

        if ($request->hasFile('thumb')) {
            $data['thumb'] = $request->file('thumb')->store('blogs');
        }

        $blog->fill($data)->save();
        
        return redirect()->route('be.blogs.index')->with('success_notify', 'Cập nhật Blog thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();

        return redirect()->route('be.blogs.index')->with('success_notify', 'Xóa Blog thành công!');
    }
}
