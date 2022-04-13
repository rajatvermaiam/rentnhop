@extends('front.layout')
@section('content')

    <style>

        .nav-pills-custom .nav-link {
            color: #aaa;
            background: #fff;
            position: relative;
        }

        .nav-pills-custom .nav-link.active {
            color: #49a6ba;
            background: #fff;
        }


        /* Add indicator arrow for the active tab */
        @media (min-width: 992px) {
            .nav-pills-custom .nav-link::before {
                content: '';
                display: block;
                border-top: 8px solid transparent;
                border-left: 10px solid #fff;
                border-bottom: 8px solid transparent;
                position: absolute;
                top: 50%;
                right: -10px;
                transform: translateY(-50%);
                opacity: 0;
            }
        }

        .nav-pills-custom .nav-link.active::before {
            opacity: 1;
        }

        .tab-content {
            padding: 0px 25px;
        }

        .x_car_acc_price_dollar_count_wrapper h5 {
            background: #49a6ba;
            color: #fff;
            padding: 7px 0px;
            border-radius: 7px;
            margin-right: 10px;
            margin-top: 15px;
        }

        .x_car_access_right_price_img_cont_wrapper h5 {
            line-height: 26px;
            font-size: 16px;
        }
    </style>


    <style>

        .invoice {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
            padding: 15px;
            background: #fff;
        }

        .table td, .table th {
            border: 1px solid !important;
        }

        .car_checkout_chekbox input[type="checkbox"] + label:before {
            margin: 0.1em 0.56em .0 .0;
        }


        .page-header {
            margin: 0 0 1rem;
            padding-bottom: 1rem;
            padding-top: .5rem;
            border-bottom: 1px dotted #e2e2e2;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -ms-flex-align: center;
            align-items: center;
        }

        .page-title {
            padding: 0;
            margin: 0;
            font-size: 1.75rem;
            font-weight: 300;
        }

        .brc-default-l1 {
            border-color: #dce9f0 !important;
        }

        .ml-n1, .mx-n1 {
            margin-left: -.25rem !important;
        }

        .mr-n1, .mx-n1 {
            margin-right: -.25rem !important;
        }

        .mb-4, .my-4 {
            margin-bottom: 1.5rem !important;
        }

        hr {
            margin-top: 5px;
            margin-bottom: 5px;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1);
        }


        .font-bolder, .text-600 {
            font-weight: 600 !important;
        }


        .pb-25, .py-25 {
            padding-bottom: .75rem !important;
        }

        .pt-25, .py-25 {
            padding-top: .75rem !important;
        }

        .bgc-default-tp1 {
            background-color: rgba(121, 169, 197, .92) !important;
        }

        .bgc-default-l4, .bgc-h-default-l4:hover {
            background-color: #f3f8fa !important;
        }


    </style>
    @if($booking_data)
        @php

            $cart_data = json_decode($booking_data['cart_data'],true);

            $price_breakup = json_decode($booking_data['price_breakup'],true);
        @endphp
        <div class="x_car_book_sider_main_Wrapper float_left" style="padding-top:100px;">
            <div class="container">
                <div class="row invoice">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="x_carbooking_right_section_wrapper float_left">
                            <div class="row">
                                <div class="page-content container">


                                    <div class="container px-0">
                                        <div class="row mt-4">
                                            <div class="col-12 col-lg-12">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="text-center text-150"
                                                             style="font-weight:600; font-size:20px; padding-bottom:10px;">

                                                            <span class="text-default-d3">INVOICE</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- .row -->

                                                <hr class="row brc-default-l1 mx-n1 mb-4"/>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h6 style="padding-bottom:5px;">Order No.<span
                                                                style="padding-left:10px;"> VUNTRSJ</span></h6>
                                                        <h6 style="padding-bottom:5px;">Invoice Date<span
                                                                style="padding-left:10px;"> {{ date_format(date_create($booking_data['created_at']),'d-M-Y' ) }} </span></h6>
                                                        <h6 style="padding-bottom:5px;">Time<span
                                                                style="padding-left:10px;"> {{ date_format(date_create($booking_data['created_at']),'h:i A' ) }} </span>
                                                        </h6>

                                                    </div>
                                                    <!-- /.col -->

                                                    <div
                                                        class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                                        <hr class="d-sm-none"/>
                                                        <div class="text-grey-m2">


                                                            <div><img src="{{asset('front/img/logo.png')}}"
                                                                      class="img-responsive" alt="logo"
                                                                      title="Logo"></div>

                                                            <div>Avantur Technologies Pvt Ltd</div>

                                                            <div> hello@rentnhop.com</div>
                                                            <div> +91 -9818627676</div>
                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>

                                                <div class="row ">
                                                    <div class="col-md-12 ">
                                                        <h6 style="font-weight:600; padding-bottom:5px;">Customer
                                                            Details</h6>
                                                        <h6 style="font-weight:600; padding-bottom:5px;">{{ $booking_data['name'] }}</h6>
                                                        <h6 style="font-weight:600; padding-bottom:5px;">{{ $booking_data['mobile'] }}</h6>
                                                        <h6 style="font-weight:600; padding-bottom:5px;"> Voter:
                                                            XXXX</h6>
                                                    </div>
                                                </div>


                                                    <div class="mt-4">
                                                        <div class="row text-400 text-white bgc-default-tp1 py-25"
                                                             style="font-weight:600;letter-spacing: 1px;    font-size: 14px;">
                                                            <div class=" col-md-1">#</div>
                                                            <div class=" col-md-5">Bike Details</div>
                                                            <div class=" col-md-1">Qty</div>
                                                            <div class=" col-md-2">Rent <br>(Mon-Thur/Fri-Sun )</div>
                                                            <div class=" col-md-1">Days</div>
                                                            <div class=" col-md-1">Total</div>
                                                        </div>
                                                        @foreach($cart_data as $key=>$data)
                                                        <div class="text-95 text-secondary-d3">
                                                            <div class="row mb-2 mb-sm-0 py-25">
                                                                <div class="col-md-1">{{ $key+1 }}</div>
                                                                <div class="col-md-5">{{ $data['vehicle_data']['vehicle_details']['name'] }} ( {{ $data['vehicle_data']['location_price_data']['locality_name'] }}
                                                                    )<br>Pickup:
                                                                    {{ date_format(date_create($data['search_data']['from']),'M  d , Y' ) }} - {{ date_format(date_create($data['search_data']['from']),'h:i:A' ) }} <br>
                                                                    Drop : {{ date_format(date_create($data['search_data']['to']),'M  d , Y' ) }} - {{ date_format(date_create($data['search_data']['to']),'h:i:A' ) }}<br><br>

                                                                    <span>Add ons:</span><br>
                                                                    1.Complimentary Helmet<br>
                                                                    2.Extra Helmet
                                                                    <br>
                                                                    Security Deposit : 3 X 1000 = ₹3000

                                                                </div>
                                                                <div class="col-md-1">{{ $data['qty'] }}</div>
                                                                <div class="col-md-2">₹{{ $data['vehicle_data']['location_price_data']['weekday_price'] }} / ₹ {{ $data['vehicle_data']['location_price_data']['weekend_price'] }}</div>
                                                                <div class="col-md-1">{{ $data['search_data']['weekends'] + $data['search_data']['weekdays'] }}</div>
                                                                <div class="col-md-1">₹{{ $data['selling_price'] }}</div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        @endforeach


                                                        <div class="row mt-3">
                                                            <div
                                                                class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">

                                                            </div>

                                                            <div
                                                                class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                                                                <div class="row my-2">
                                                                    <div class="col-7 text-right">
                                                                        Total Rent
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <span class="text-120 text-secondary-d1">₹{{ $price_breakup['selling_price'] }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="row my-2">
                                                                    <div class="col-7 text-right">
                                                                        Adavanced Paid ( UPI )
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <span
                                                                            class="text-110 text-secondary-d1">₹{{ $price_breakup['partially_amount'] }}</span>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="row my-2 align-items-center bgc-primary-l3 p-2">
                                                                    <div class="col-7 text-right">
                                                                        Remaining Rent
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <span
                                                                            class="text-150 text-success-d3 opacity-2">₹{{$price_breakup['remaining_amount']}}</span>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="row my-2 align-items-center bgc-primary-l3 p-2">
                                                                    <div class="col-7 text-right">
                                                                        Security Deposit
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <span
                                                                            class="text-150 text-success-d3 opacity-2">₹{{ $price_breakup['security_price'] }}</span>
                                                                    </div>
                                                                </div>

                                                                {{--<div
                                                                    class="row my-2 align-items-center bgc-primary-l3 p-2">
                                                                    <div class="col-7 text-right">
                                                                        Discount
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <span
                                                                            class="text-150 text-success-d3 opacity-2">₹500.00</span>
                                                                    </div>
                                                                </div>--}}

                                                                <div
                                                                    class="row my-2 align-items-center bgc-primary-l3 p-2">
                                                                    <div class="col-7 text-right">
                                                                        To be paid at time of Pickup
                                                                        ( including ₹{{ $price_breakup['security_price'] }} Refundable* Security Deposit)
                                                                    </div>
                                                                    <div class="col-5">
                                                                        <span
                                                                            class="text-150 text-success-d3 opacity-2">₹{{$price_breakup['remaining_amount']+$price_breakup['security_price']}}</span>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <hr/>
                                                        <div class="row ">
                                                            <div class="col-md-12">
                                                                <span>  This is a computer Generated Bill and does not require a signature. </span>
                                                            </div>

                                                        </div>

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
