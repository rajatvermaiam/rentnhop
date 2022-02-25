<?php

namespace App\Http\Controllers\adminv\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\Location;
use App\Models\User;
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


        $locations = Location::with('city')->latest()->get();

        return view('adminv.admin.location.index',compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city = Cities::latest()->get();
        $user = User::latest()->get();
        return view('adminv.admin.location.createLocation',compact('city','user'));
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
            'city_id' => ['required', 'numeric'],
            'user_id'=> ['required', 'numeric'],
            'map_url' => ['required', 'string'],

        ],
            [
                'city_id.required' => 'The city field is required.',
                'user_id.required' => 'The vendor field is required.'
            ]
        );

        $data = $request->all();

        Location::create($data);

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
        $city = Cities::latest()->get();
        $user = User::latest()->get();
        return view('adminv.admin.location.editLocation',compact('location','city','user'));
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
            'name' => ['required', 'string', 'max:255'],
            'city_id' => ['required', 'numeric'],
            'user_id' => ['required', 'numeric'],
            'map_url' => ['required', 'string'],

        ],
            [
                'city_id.required' => 'The city field is required.',
                'user_id.required' => 'The vendor field is required.'
            ]

        );
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
