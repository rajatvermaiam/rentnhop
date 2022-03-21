<?php

namespace App\Http\Controllers;


use App\Models\Cities;
use App\Models\Coupon;

use App\Models\Vehicle;

use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __construct()
    {

    }


    public function index()
    {
        $cities = Cities::latest()->get();
        $coupon = Coupon::latest()->where('status','active')->get();
        return view('front.index',compact('cities','coupon'));
    }

    public function result(Request $request){

        $city = $request->input('city');
        $city_id = $request->input('city_id');
        $from = $request->input('from');
        $to = $request->input('to');

        $search_data = [
            'city'=>$city,
            'city_id'=>$city_id,
            'from'=>$from,
            'to'=>$to
        ];
        $request->session()->put('search_data', $search_data);

        $Vehicle = Vehicle::latest()->get();
        return view('front.product-list',compact('Vehicle'));
    }


}
