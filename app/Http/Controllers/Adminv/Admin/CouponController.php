<?php

namespace App\Http\Controllers\Adminv\Admin;

use App\Http\Controllers\Controller;
use App\Models\adminv\admin\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $coupon = Coupon::latest()->get();

        return view('adminv.admin.coupon.index',compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminv.admin.coupon.createCoupon');
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
            'coupon_code' => ['required', 'string', 'max:12'],
            'coupon_expire_date' => ['required'],
            'coupon_type' => 'required',
            'status' => ['required'],
            'coupon_times_used' => ['required','numeric'],
            'coupon_times_used' => ['required','numeric'],
            'amount' => ['required','numeric'],
            'minimum_booking_amount' => ['required','numeric'],
            'maximum_booking_amount' => ['required','numeric'],

        ]);


        $data = $request->all();

        Coupon::create($data);

        return redirect(route('admin.coupon.index'))->with('success', 'Coupon Has Been created');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $Coupon)
    {
        $Coupon->delete();

        return redirect(route('admin.coupon.index'))->with('success', 'Coupon Has Been deleted');
    }
}
