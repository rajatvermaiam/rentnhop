<?php

namespace App\Http\Controllers\Adminv\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = Cities::latest()->get();

        return view('adminv.admin.cities.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminv.admin.cities.createCities');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ],
            [
                'name.required' => 'The city name field is required.',
            ]
        );

        $data = $request->all();

        Cities::create($data);

        return redirect(route('admin.cities.index'))->with('success', 'City Has Been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Adminv\admin\Cities  $cities
     * @return \Illuminate\Http\Response
     */
    public function show(Cities $cities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adminv\admin\Cities  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cities = Cities::findOrFail($id);
        return view('adminv.admin.cities.editCities',compact('cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adminv\admin\Cities  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ],
            [
                'name.required' => 'The city name field is required.',
            ]
        );
        $cities = Cities::findOrFail($id);

        $cities->update($request->all());

        return redirect(route('admin.cities.index'))->with('success', 'City Has Been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adminv\admin\Cities  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cities = Cities::findOrFail($id);
        $cities->delete();

        return redirect(route('admin.cities.index'))->with('success', 'City Has Been deleted');
    }

}
