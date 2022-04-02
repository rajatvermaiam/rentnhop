@extends('front.layout')
@section('content')
    <style>

        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6 !important;
        }

        .table thead th {
            text-align: center;

        }

        .blft {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }

        .blft h2 {
            text-align: center;
            font-size: 24px;
            font-weight: 600;
            border: 1px solid #dee2e6;
            color: #000000;
            border-radius: 3px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .blft h3 {
            padding-top: 10px;
            padding-bottom: 15px;

            color: #fff;
            font-size: 20px;
            text-align: center;
            background: #49a6ba;
            margin-top: 15px;
        }

        .blft h5 {
            background: #49a6ba;
            padding-bottom: 15px;
            color: #fff;
            font-size: 14px;
            text-align: center;
        }


        .rgt-box {
            background: #fff;
            padding: 20px;
            /* position: fixed;*/
            z-index: 999;
            border-radius: 10px;
        }

        .table td, .table th {
            padding: 5px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }


        .crtbtn a {
            padding: 12px;
        }

        .crtbtn {
            text-align: center;
            padding: 20px;
        }

        .chk {
            padding: 10px;
            text-align: center;
            background: #49a6ba;
            margin-top: 10px;
        }

        .car_checkout_chekbox label {
            margin-bottom: 0;
            color: #ffffff;
            font-weight: 500 !important;
        }

        .x_car_book_sider_main_Wrapper {
            padding-bottom: 50px;
        }


        .card {
            box-shadow: none;
            border-radius: 12px;
            border: 1px solid #e8e8e8;
        }

        .card-content {
            padding: 20px 10px;
        }

        .card-content img {
            width: auto;
            height: 30px;
        }

        .pickup-info {
            font-weight: 400;
            font-size: 16px;
            padding-top: 10px;
        }

        .card .card-content p {
            margin: 0;
            font-size: 14px;
        }

        .duration-info {
            padding-top: 20px;
            text-align: center;
        }

        .cart-line {
            height: 2px;
            width: 80px;
            display: inline-block;
        }

        .duration-info p {
            font-weight: 700;
            font-size: 14px;
            display: inline-block;
            padding: 0 10px;
        }

        .card-content .cart-line {
            height: 2px;
            width: 40px;
            display: inline-block;
        }

        .drop-info {
            font-weight: 400;
            font-size: 16px;
            padding-bottom: 10px;

        }

        .card-content.drop-img {
            float: right;
        }

        .center {
            width: 150px;
            margin: 40px auto;

        }

        button.btn.btn-default.btn-number {
            border-radius: 0;
        }


        .icn {
            text-align: center;
            padding-top: 20px;
        }

        /*.no-padding {
            padding: 0!important;
        }*/
        .conditions {
            overflow: hidden;
            padding: 5px;
            margin-bottom: 20px;
            border-bottom: 1px solid #e5e5e5;
        }

        .icn img {
            height: 40px;
            width: auto;
            /* float: left; */
        }

        .icn h2 {
            font-weight: 400;
            font-size: 14px;
            /* display: flex; */
            margin: 0;
            /* padding-left: 12px; */
            border: none;
        }

        .icn p {
            font-weight: 400;
            font-size: 12px;
        }


        ul#product_terms li {
            list-style: inside;
            padding: 5px 0px;
        }


        .sticky {
            position: -webkit-sticky;
            position: sticky;

        }


    </style>

    <div class="x_car_book_sider_main_Wrapper float_left" style="padding-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-md-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs Navigation End -->
    <div class="x_car_book_sider_main_Wrapper float_left" style="padding-top:0px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-md-12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- x car book sidebar section Wrapper Start -->
    @if($cartProducts = session('cartProducts'))
        <div class="x_car_book_sider_main_Wrapper float_left">
            <div class="container-fluid">
                <div class="row wrapper">


                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 main">
                        @foreach($cartProducts as $key=>$data)
                            <div class="blft">
                                <div class="row">
                                    <div class="col-xl-4 ">
                                        <h2> {{ $data['vehicle_data']['vehicle_details']['name'] }} </h2>
                                        <img src="/images/{{ $data['image'] }}"
                                             class="img-responsive" style="width: 100%;">
                                        <div class="icn">
                                            <div class="row">
                                                <div class="col-md-6 no-padding">
                                                    <div class="conditions">
                                                        <img alt="Refundable Deposit"
                                                             src="https://static.gobikes.co.in/images/feature-deposit.png">
                                                        <span>
                                                <h2>Refundable Deposit</h2>
                                                <p>₹ {{ $data['vehicle_data']['location_price_data']['security_price'] }}</p>
                                            </span>
                                                    </div>
                                                    <div class="conditions">
                                                        <img alt="distance-limit"
                                                             src="https://static.gobikes.co.in/images/distance-limit.png">
                                                        <span>
                                            <h2>Distance Limit</h2>
                                            <p>100 Kms/Day</p>
                                            </span>
                                                    </div>
                                                    <div class="conditions">
                                                        <img alt="late-penalty"
                                                             src="https://static.gobikes.co.in/images/late-penalty.png">
                                                        <span>
                                                <h2>Late Penalty</h2>
                                                <p>₹ 50/hr</p>
                                            </span>
                                                    </div>
                                                </div>


                                                <div class="col-md-6 no-padding">
                                                    <div class="conditions">
                                                        <img alt="Refundable Deposit"
                                                             src="https://static.gobikes.co.in/images/feature-deposit.png">
                                                        <span>
                                                <h2>Refundable Deposit</h2>
                                                <p>₹ {{ $data['vehicle_data']['location_price_data']['security_price'] }}</p>
                                                </span>
                                                    </div>
                                                    <div class="conditions">
                                                        <img alt="distance-limit"
                                                             src="https://static.gobikes.co.in/images/distance-limit.png">
                                                        <span>
                                                <h2>Distance Limit</h2>
                                                <p>100 Kms/Day</p>
                                            </span>
                                                    </div>
                                                    <div class="conditions">
                                                        <img alt="late-penalty"
                                                             src="https://static.gobikes.co.in/images/late-penalty.png">
                                                        <span>
                                            <h2>Late Penalty</h2>
                                            <p>₹ 50/hr</p>
                                            </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 ">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th colspan="4" align="center">
                                                    <div class="card">
                                                        <div class="card-content">
                                                            <div class="row">
                                                                <div class="col-md-4 s12"><img alt="Pickup"
                                                                                               class="pickup-img"
                                                                                               src="https://static.gobikes.co.in/images/cart-pickup.png">
                                                                    <div class="pickup-info">
                                                                        <p>{{ date_format(date_create($data['search_data']['from']),'M  d , Y' ) }}
                                                                            <br>{{ date_format(date_create($data['search_data']['from']),'h:i:A' ) }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 s12 duration-info">
                                                                    <p style="font-size: 14px;color: #ffffff; background: #49a6ba;border-radius: 5px;">
                                                                        {{ $data['search_data']['weekends'] + $data['search_data']['weekdays'] }}
                                                                        Days</p>
                                                                    <p>{{ $data['vehicle_data']['location_price_data']['locality_name'] }}</p>
                                                                </div>
                                                                <div class="col-md-4 s12">
                                                                    <div class="drop-info">
                                                                        <img alt="Pickup" class="drop-img"
                                                                             src="https://static.gobikes.co.in/images/cart-drop.png">
                                                                        <p>{{ date_format(date_create($data['search_data']['to']),'M  d , Y' ) }}
                                                                            <br> {{ date_format(date_create($data['search_data']['to']),'h:i:A' ) }}
                                                                        </p>

                                                                        <!--<p >Rohini Sector 18</p>-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>Quantity</td>
                                                <td>Rate</td>
                                                <td>Total Rent</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $data['vehicle_data']['vehicle_details']['name'] }}</td>
                                                <td>
                                                    <div class="input-group" style="width: 60%;">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number"
                                                          data-type="minus" data-field="quant[1]" rent-cart-update="true" data-method="POST"
                                                          data-href="{{ url('cart/update-cart') }}"
                                                          data-vehicle-id="{{ $data['vehicle_data']['vehicle_details']['id'] }}">
                                                   <i class="fa fa-minus" aria-hidden="true"></i>
                                                  </button>
                                              </span>
                                                        <input type="text" name="quant[1]"
                                                               class="form-control input-number"
                                                               value="{{ $data['qty'] }}" rent-qty="true" min="1" max="5" readonly>
                                                        <span class="input-group-btn">
                                              <button type="button" class="btn btn-default btn-number" data-type="plus"
                                                      data-field="quant[1]"  rent-cart-update="true" data-method="POST"
                                                      data-href="{{ url('cart/update-cart') }}"
                                                      data-vehicle-id="{{ $data['vehicle_data']['vehicle_details']['id'] }}">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                              </button>
                                          </span>
                                                    </div>
                                                </td>
                                                <td>Mon-Thur
                                                    ₹{{ $data['vehicle_data']['location_price_data']['weekday_price'] }}
                                                    /day <br> Fri-Sun
                                                    ₹{{ $data['vehicle_data']['location_price_data']['weekend_price'] }}
                                                    /day
                                                </td>
                                                <td>{{ $data['selling_price'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Add Ons</td>
                                                <td colspan="3">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Complimentary Helmet</td>
                                                <td>
                                                    <div class="input-group" style="width: 60%;">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number"
                                                          data-type="minus" data-field="quant[3]">
                                                   <i class="fa fa-minus" aria-hidden="true"></i>
                                                  </button>
                                              </span>
                                                        <input type="text" name="quant[3]"
                                                               class="form-control input-number"
                                                               value="10" min="1" max="100">
                                                        <span class="input-group-btn">
                                              <button type="button" class="btn btn-default btn-number" data-type="plus"
                                                      data-field="quant[3]">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                              </button>
                                          </span>
                                                    </div>
                                                </td>
                                                <td>0</td>
                                                <td>0</td>
                                            </tr>
                                            <tr>
                                                <td>Tank Full</td>
                                                <td>

                                                    <div class="input-group" style="width: 60%;">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number"
                                                          data-type="minus" data-field="quant[4]">
                                                   <i class="fa fa-minus" aria-hidden="true"></i>
                                                  </button>
                                              </span>
                                                        <input type="text" name="quant[4]"
                                                               class="form-control input-number"
                                                               value="10" min="1" max="100">
                                                        <span class="input-group-btn">
                                              <button type="button" class="btn btn-default btn-number" data-type="plus"
                                                      data-field="quant[4]">
                                               <i class="fa fa-plus" aria-hidden="true"></i>
                                              </button>
                                          </span>
                                                    </div>
                                                </td>
                                                <td>400</td>
                                                <td>1200</td>
                                            </tr>
                                            <tr>
                                                <td>Extra Helmet</td>
                                                <td>

                                                    <div class="input-group" style="width: 60%;">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number"
                                                          data-type="minus" data-field="quant[5]">
                                                   <i class="fa fa-minus" aria-hidden="true"></i>
                                                  </button>
                                              </span>
                                                        <input type="text" name="quant[5]"
                                                               class="form-control input-number"
                                                               value="10" min="1" max="100">
                                                        <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number"
                                                          data-type="plus" data-field="quant[5]">
                                                   <i class="fa fa-plus" aria-hidden="true"></i>
                                                  </button>
                                            </span>
                                                    </div>
                                                </td>
                                                <td>50</td>
                                                <td>400</td>
                                            </tr>
                                            <tr>
                                                <td>Total Rent</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>8600</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12">
                                        <h3> Terms & Condition</h3>
                                        <ul class="mission-nav" id="product_terms">
                                            {{--<li>&nbsp;Minimum age of the rider must be 26&nbsp;years.&nbsp;</li>--}}

                                            {{ $data['vehicle_data']['vehicle_details']['terms_conditions'] }}

                                        </ul>
                                    </div>
                                    <div class="col-md-12 chk">
                                        <div class="checkbox car_checkout_chekbox">
                                            <input type="checkbox" id="c3" name="terms" checked>
                                            <label for="c3">I have Read and Accept Terms &amp; Conditions *</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    {{--payment div start--}}
                    <div class="col-md-4 sticky">
                        <div class="rgt-box">
                            <table class="table table-bordered">
                                <tbody>

                                <td colspan="2" style="text-align: center;font-weight: 600; font-size: 20px;">Vehicle +
                                    Add
                                    Ons
                                </td>
                                </tr>
                                <tr>
                                    <td>Rent</td>
                                    <td>Rs. {{ $price_breakup['selling_price'] }}</td>
                                </tr>
                                <tr>
                                    <td>Advance Payment (20 %)</td>
                                    <td>Rs. {{ $price_breakup['partially_amount'] }}</td>
                                </tr>
                                <tr>
                                    <td> Security Deposit</td>
                                    <td>Rs. {{ $price_breakup['security_price'] }}</td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Payment at Pickup (Including Rs.{{ $price_breakup['security_price'] }} Refundable Security Deposit )</td>
                                    <td>Rs. {{$price_breakup['remaining_amount']+$price_breakup['security_price']}}</td>
                                </tr>
                                </tbody>

                            </table>
                            <div class="col-md-12 crtbtn">
                                <a href="#"
                                   style="background: #49a6ba;color: #fff; border-radius: 10px; font-weight: 300;">
                                    <strong>Login to Pay / Proceed to Payment </strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else

        <div class="x_car_book_sider_main_Wrapper float_left">
            <div class="container-fluid">
                <div class="row wrapper ">
                    <div class="col-ms-12">
                        <h3 class="text-center">Empty Cart</h3>
                    </div>
                </div>
            </div>
        </div>

    @endif
    <!-- x car book sidebar section Wrapper End -->
@endsection
