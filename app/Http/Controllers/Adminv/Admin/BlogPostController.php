<?php

namespace App\Http\Controllers\Adminv\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adminv\Admin\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = BlogPost::latest()->get();

        return view('adminv.admin.blog.posts.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminv.admin.blog.posts.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_title' => ['required', 'string', 'max:255'],
            'post_slug' => ['required', 'string', 'max:255'],
            'description' => 'required',
            'status' => ['required'],
            'meta_robots' => ['required'],
            'meta_title' => ['required'],
            'meta_keyword' => ['required'],
            'meta_description' => ['required'],

        ]);


        $data = $request->all();


        $data['post_images']='rentnhop';


        BlogPost::create($data);

        return redirect(route('admin.blog-posts.index'))->with('success', 'Blog Posts Has Been created');
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
        $data = BlogPost::find($id);

        return view('adminv.admin.blog.posts.editPost',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $BlogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,BlogPost $BlogPost)
    {
        $request->validate([
            'post_title' => ['required', 'string', 'max:255'],
            'post_slug' => ['required', 'string', 'max:255'],
            'description' => 'required',
            'status' => ['required'],
            'meta_robots' => ['required'],
            'meta_title' => ['required'],
            'meta_keyword' => ['required'],
            'meta_description' => ['required'],

        ]);


        $data = $request->all();


        $data['post_images']='rentnhop';

        $update_data= $BlogPost->update($data);

        return redirect(route('admin.blog-posts.index'))->with('success', 'Blog Post Has Been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $BlogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $BlogPost)
    {
        $BlogPost->delete();

        return redirect(route('admin.blog-posts.index'))->with('success', 'Blog Post Has Been deleted');
    }
}
