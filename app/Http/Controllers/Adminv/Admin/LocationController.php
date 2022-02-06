<?php

namespace App\Http\Controllers\adminv\admin;

use App\Http\Controllers\Controller;
use App\Models\adminv\admin\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $locations = Location::latest()->get();
        return view('adminv.admin.location.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('adminv.admin.location.createLocation');
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
            'location' => ['required', 'string', 'max:255'],
            'map_url' => ['required', 'string', 'max:555'],

        ]);

        Location::create($request->all());

        return redirect(route('admin.location.index'))->with('success', 'Location Has Been created');
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
     * @param Location $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        return view('adminv.admin.location.editLocation',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Location $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $validated = $request->validate([
            'location' => ['required', 'string', 'max:255'],
            'map_url' => ['required', 'string', 'max:555'],

        ]);
        $location->update($request->all());


        return redirect(route('admin.location.index'))->with('success', 'Location Has Been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Location $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();

        return redirect(route('admin.location.index'))->with('success', 'Loction Has Been deleted');
    }
}
