<?php

namespace App\Http\Controllers\adminv\admin;

use App\Http\Controllers\Controller;
use App\Models\adminv\admin\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::latest()->get();
        return view('adminv.admin.vehicle.index',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminv.admin.vehicle.createVehicle');
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
            'name' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'description' => 'required',
            'terms_conditions' => 'required',
           'meta_robots' => ['required'],
           'meta_title' => ['required'],
           'meta_keyword' => ['required'],
           'meta_description' => ['required'],

        ]);
        $user_id = $role = Auth::user()->id;

        $data = $request->all();
        $data['user_id'] = $user_id;

        $data['images']='rentnhop';


        Vehicle::create($data);

        return redirect(route('admin.vehicle.index'))->with('success', 'Vehicle Has Been created');
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
     * @param  int  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        return view('adminv.admin.vehicle.editVehicle',compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'model' => ['required', 'string', 'max:255'],
            'description' => 'required',
            'terms_conditions' => 'required',
            'meta_robots' => ['required'],
            'meta_title' => ['required'],
            'meta_keyword' => ['required'],
            'meta_description' => ['required'],

        ]);
        $data = $request->all();
        $data['images']='rentnhop';
        $vehicle->update($data);


        return redirect(route('admin.vehicle.index'))->with('success', 'Vehicle Has Been updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect(route('admin.vehicle.index'))->with('success', 'Vehicle Has Been deleted');
    }
}
