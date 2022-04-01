<?php

namespace App\Http\Controllers;


use App\Models\Cities;
use App\Models\Coupon;

use App\Models\Vehicle;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class StoreController extends Controller
{

    public function __construct()
    {

    }


    public function index()
    {
        $cities = Cities::latest()->where('parent_id',null)->get();
        $coupon = Coupon::latest()->where('status', 'active')->get();
        return view('front.index', compact('cities', 'coupon'));
    }

    public function result(Request $request)
    {

        $city = $request->input('city');
        $city_id = $request->input('city_id');
        $from = $request->input('from');
        $to = $request->input('to');

        $search_data = [
            'city' => $city,
            'city_id' => $city_id,
            'from' => $from,
            'to' => $to
        ];
        $request->session()->put('search_data', $search_data);

        $Vehicle = Vehicle::with('prices')->get();


        return view('front.product-list', compact('Vehicle'));
    }

    public function product_list_modal(Request $request)
    {

        $vehicle_id = $request->input('vehicle_id');


        $vehicle['vehicle'] = Vehicle::with('prices')->where('id', $vehicle_id)->first();


        $data = View('front.product-list-page-modal', $vehicle)->render();

        $message = [
            "StatusCode" => 0,
            'data' => $data,
            "Message" => "Data fetched successfully"
        ];


        return response()->json($message)->withCallback($request->input('callback'));
    }


}
