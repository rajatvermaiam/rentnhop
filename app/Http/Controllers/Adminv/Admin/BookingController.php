<?php

namespace App\Http\Controllers\Adminv\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::latest()->get();

        return view('adminv.admin.booking.index',compact('bookings'));
    }

    public function invoice(Request $request){

        $id = rent_decode(\Request::segment(3));


        $booking_data = Booking::where('id', $id)->first();


        return view('common.invoice',compact('booking_data'));
    }
}
