<?php

namespace App\Http\Controllers\Adminv\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adminv\Admin\BlogCategory;
use Illuminate\Http\Request;

class BlogCategeoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = BlogCategory::latest()->get();

        return view('adminv.admin.blog.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminv.admin.blog.category.createCategory');
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
            'category_name' => ['required', 'string', 'max:255'],
            'category_slug' => ['required', 'string', 'max:255'],
            'description' => 'required',
            'status' => ['required'],
            'meta_robots' => ['required'],
            'meta_title' => ['required'],
            'meta_keyword' => ['required'],
            'meta_description' => ['required'],

        ]);


        $data = $request->all();


        $data['category_img']='rentnhop';


        BlogCategory::create($data);

        return redirect(route('admin.blog-category.index'))->with('success', 'Blog Category Has Been created');
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
        $category = BlogCategory::find($id);

        return view('adminv.admin.blog.category.editCategory',compact('category'));

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $BlogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,BlogCategory $BlogCategory)
    {

        $request->validate([
            'category_name' => ['required', 'string', 'max:255'],
            'category_slug' => ['required', 'string', 'max:255'],
            'description' => 'required',
            'status' => ['required'],
            'meta_robots' => ['required'],
            'meta_title' => ['required'],
            'meta_keyword' => ['required'],
            'meta_description' => ['required'],

        ]);

        $data = $request->all();
        $data['category_img']='rentnhop';

       $update_data= $BlogCategory->update($data);

        return redirect(route('admin.blog-category.index'))->with('success', 'Blog Category Has Been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory  $category)
    {
        $category->delete();

        return redirect(route('admin.blog-category.index'))->with('success', 'Blog Category Has Been deleted');
    }
}
