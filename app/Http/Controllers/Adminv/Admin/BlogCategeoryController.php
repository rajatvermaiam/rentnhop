<?php

namespace App\Http\Controllers\Adminv\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'category_img' => 'required|image|mimes:jpg,png,jpeg,svg|max:1024',
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
        $imageName = $request->file('category_img')->getClientOriginalName();
        $imageName = time().$imageName;
        $request->category_img->move(public_path('images'), $imageName);

        $data['category_img']=$imageName;

        $user_id = $role = Auth::user()->id;

        $data['user_id'] = $user_id;


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


        if (isset($data['category_img'])) {
            $imageName = $request->file('category_img')->getClientOriginalName();
            $imageName = time() . $imageName;
            $request->category_img->move(public_path('images'), $imageName);
            $data['category_img']=$imageName;
        }else{
            $data['category_img']=$BlogCategory['category_img'];
        }


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
