<?php

namespace App\Http\Controllers\adminv\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cities;
use App\Models\Price;
use App\Models\PriceVehicle;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $prices = Price::with('city')->latest()->get();

        return view('adminv.admin.price.index',compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city =  Cities::with('childrens')->where('parent_id',null)->get();
        $vehicles = Vehicle::latest()->get();
        $user = User::latest()->whereIn('role_id',[1, 2])->get();
        return view('adminv.admin.price.createPrice',compact('city','user','vehicles'));
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

            'city_id' => ['required', 'numeric'],
            'user_id'=> ['required', 'numeric'],
            'status'=> ['required'],
            'vehicle_id'=> ['required', 'numeric'],
            'weekday_price' => ['required', 'numeric'],
            'weekend_price' => ['required', 'numeric'],
            'security_price' => ['required', 'numeric'],
            'monthly_price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],

        ],
            [
                'city_id.required' => 'The city field is required.',
                'user_id.required' => 'The vendor field is required.',
                'vehicle_id.required' => 'The vehicle field is required.',
            ]
        );

        $data = $request->all();

        $vehicle_id = $data['vehicle_id'];
        $location_id = $data['city_id'];

        $location_data =  Cities::where('id',$location_id)->first();

        $city_data =  Cities::where('id',$location_data->parent_id)->first();

        $city_id = $city_data->id;


        $data['city_name']=$city_data->name;
        $data['city_id']=$city_id;
        $data['locality_id']=$location_id;
        $data['locality_name']=$location_data->name;
        $data['vehicle_id']=$vehicle_id;
        $data['is_monthly']=false;
        $price_insert = Price::create($data);

        $price_vehicle = [
            'vehicle_id'=>$vehicle_id,
            'price_id'=>$price_insert->id,
            'city_id'=>$city_id,
        ];

        PriceVehicle::create($price_vehicle);

        return redirect(route('admin.price.index'))->with('success', 'Price Has Been created');
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
     * @param Price $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        $vehicles = Vehicle::latest()->get();
        $city =  Cities::with('childrens')->where('parent_id',null)->get();
        $user = User::latest()->whereIn('role_id',[1, 2])->get();
        return view('adminv.admin.price.editprice',compact('price','city','user','vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Price $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {

        $validated = $request->validate([
            'city_id' => ['required', 'numeric'],
            'user_id' => ['required', 'numeric'],
            'vehicle_id' => ['required', 'numeric'],
            'weekday_price' => ['required', 'numeric'],
            'weekend_price' => ['required', 'numeric'],
            'security_price' => ['required', 'numeric'],
            'monthly_price' => ['required', 'numeric'],
            'quantity' => ['required', 'numeric'],


        ],
            [
                'city_id.required' => 'The city field is required.',
                'user_id.required' => 'The vendor field is required.',
                'vehicle_id.required' => 'The vehicle field is required.',
            ]

        );

        $price->update($request->all());


        return redirect(route('admin.price.index'))->with('success', 'Price Has Been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Price $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        $price->delete();

        return redirect(route('admin.price.index'))->with('success', 'Loction Has Been deleted');
    }
}
