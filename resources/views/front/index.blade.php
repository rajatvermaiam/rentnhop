@extends('front.layout')
@section('content')


    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12 book">
        <div class="content_tabs">
            <div class="row">


                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 fmmob">


                    <div class="x_slider_form_main_wrapper float_left" data-animation="animated fadeIn">
                        <div class="col-md-12">


                            <nav style="padding-top:20px;">
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                       role="tab" aria-controls="nav-home" aria-selected="true">Daily Rental</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                       role="tab" aria-controls="nav-profile" aria-selected="false">Monthly Subscription</a>

                                </div>
                            </nav>
                            <div class="inst ">

                                <h1>Instant Confirmation! </h1>
                                <h4 class="">Bike Rental in Delhi-NCR </h4></div>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    <div class="row mobp" style="padding:20px;">
                                        <div class="col-md-12" style="padding:0;">
                                            <div class="x_slider_form_input_wrapper float_left">


                                                <input type="text" placeholder="Select City" data-toggle="modal"
                                                       data-target="#exampleModalD">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6" style="padding:0;">
                                            <div class="form-sec-header">
                                                <label class="cal-icon">


                                                    <div class="input-group date-group">
                                                        <div class="form-group">
                                                            <div class="input-group date form_datetime fleet-filter-select"
                                                                 data-date="1979-09-16T05:25:07Z"
                                                                 data-date-format="dd MM yyyy - HH:ii p"
                                                                 data-link-field="dtp_input1">
                                                                <input class="form-control" size="" name="from" type="text"
                                                                       value="" placeholder="Start Date" readonly="">
                                                                <span class="input-group-addon"><span
                                                                        class="glyphicon glyphicon-calendar"></span></span>
                                                            </div>
                                                            <input type="hidden" id="dtp_input1"
                                                                   value="2022-03-10 10:00:00">
                                                        </div>
                                                    </div>
                                                </label>


                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6" style="padding:0;">
                                            <div class="form-sec-header">

                                                <label class="cal-icon">


                                                    <div class="input-group date-group">
                                                        <div class="form-group">
                                                            <div class="input-group date form_datetime fleet-filter-select"
                                                                 data-date="1979-09-16T05:25:07Z"
                                                                 data-date-format="dd MM yyyy - HH:ii p"
                                                                 data-link-field="dtp_input1">
                                                                <input class="form-control" size="" name="from" type="text"
                                                                       value="" placeholder="Start Date" readonly="">
                                                                <span class="input-group-addon"><span
                                                                        class="glyphicon glyphicon-calendar"></span></span>
                                                            </div>
                                                            <input type="hidden" id="dtp_input1"
                                                                   value="2022-03-10 10:00:00">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="col-md-12 text-center">
                                            <div class="x_slider_checkbox_bottom float_left">
                                                <div class="x_slider_btn">
                                                    <a href="#">Search </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-home-tab" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="x_slider_form_input_wrapper float_left">
                                                <h3>Drop-off Location</h3>

                                                <input type="text" placeholder="City, Airport, Station, etc.">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-sec-header">
                                                <h3>Pick-up Date</h3>

                                                <label class="cal-icon">Pick-up Date
                                                    <input type="text" placeholder="Tue 16 Jan 2018"
                                                           class="form-control datepicker">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-sec-header">
                                                <h3>Drop-Off Date</h3>
                                                <label class="cal-icon">Pick-up Date
                                                    <input type="text" placeholder="Tue 16 Jan 2018"
                                                           class="form-control datepicker">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="x_slider_select">
                                                <select class="myselect">
                                                    <option>09</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                </select>
                                                <i class="fa fa-clock-o"></i></div>
                                            <div class="x_slider_select x_slider_select2">
                                                <select class="myselect">
                                                    <option>50</option>
                                                    <option>40</option>
                                                    <option>03</option>
                                                    <option>02</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="x_slider_select">
                                                <select class="myselect">
                                                    <option>09</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                </select>
                                                <i class="fa fa-clock-o"></i></div>
                                            <div class="x_slider_select x_slider_select2">
                                                <select class="myselect">
                                                    <option>50</option>
                                                    <option>40</option>
                                                    <option>03</option>
                                                    <option>02</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="x_slider_checkbox_bottom float_left">
                                                <div class="x_slider_checout_right">
                                                    <ul>
                                                        <li><a href="#">search <i class="fa fa-arrow-right"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <!--<div class="x_offer_tabs_wrapper">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#home"> Daily Rental</a>
                                    <div class="arrow-downRental"></div>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#menu1"> Monthly Subscription</a>
                                    </li>

                                </ul>
                            </div>-->
                            <!--<div class="tab-content">
                                <div id="home" class="tab-pane active">

                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="row">
                    <div class="col-md-12">
                      <div class="x_slider_form_input_wrapper float_left">
                        <h3>Drop-off Location</h3>
                        <input type="text" placeholder="City, Airport, Station, etc.">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-sec-header">
                        <h3>Pick-up Date</h3>
                        <label class="cal-icon">Pick-up Date
                          <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-sec-header">
                        <h3>Drop-Off Date</h3>
                        <label class="cal-icon">Pick-up Date
                          <input type="text" placeholder="Tue 16 Jan 2018" class="form-control datepicker">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="x_slider_select">
                        <select class="myselect">
                          <option>09</option>
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                        </select>
                        <i class="fa fa-clock-o"></i> </div>
                      <div class="x_slider_select x_slider_select2">
                        <select class="myselect">
                          <option>50</option>
                          <option>40</option>
                          <option>03</option>
                          <option>02</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="x_slider_select">
                        <select class="myselect">
                          <option>09</option>
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                        </select>
                        <i class="fa fa-clock-o"></i> </div>
                      <div class="x_slider_select x_slider_select2">
                        <select class="myselect">
                          <option>50</option>
                          <option>40</option>
                          <option>03</option>
                          <option>02</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="x_slider_checkbox_bottom float_left">
                        <div class="x_slider_checout_right">
                          <ul>
                            <li><a href="#">search <i class="fa fa-arrow-right"></i></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                                </div>

                            </div>-->
                        </div>
                        <div class=" float_left">


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--
        ####################################################
        C A R O U S E L
        ####################################################
        -->
    <div id="carousel-2" class="carousel slide carousel-fade d-none d-sm-block d-sm-none d-md-block" data-ride="carousel"
         data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-2" data-slide-to="1"></li>
            <li data-target="#carousel-2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><a href="#"> <img src="{{asset('front/img/slider3.jpg')}}"
                                                                alt="responsive image" class="d-block img-fluid"> </a></div>
            <!-- /.carousel-item -->

            <div class="carousel-item"><a href="#"> <img src="{{asset('front/img/slider2.jpg')}}" alt="responsive image"
                                                         class="d-block img-fluid"> </a></div>
            <!-- /.carousel-item -->
            <div class="carousel-item"><a href="#"> <img src="{{asset('front/img/slider1.png')}}" alt="responsive image"
                                                         class="d-block img-fluid"> </a></div>
            <!-- /.carousel-item -->

        </div>

        <!-- /.carousel-inner -->
        <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev"> <span
                class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a
            class="carousel-control-next" href="#carousel-2" role="button" data-slide="next"> <span
                class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a></div>
    <!-- /.carousel -->

    @if($coupon)
        @foreach ($coupon as $key=>$data)
    <div class="modal fade" id="couponModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="couponModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background: #f1f4f8;">
                <div class="modal-header" style="border-bottom:none;    padding: 9px 20px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="modal-title" id="exampleModalLabel" style="color: #98a6b3;"><strong>Flat {{$data->amount}} @if($data->coupon_type =='percent')% @endif Off </strong>
                    </h4>
                    <p>Use code {{$data->coupon_code}} and get flat {{$data->amount}} @if($data->coupon_type=="percent")%@endif off</p>
                    <div class="jp_blog_right_search_wrapper">
                        <input type="text" placeholder="{{$data->coupon_code}}" style="border-radius:50px;width: calc(110% - 45px);">
                        </button>
                    </div>
                    <h4 class="modal-title" id="exampleModalLabel" style="color: #98a6b3;"><strong>Terms and
                            Conditions</strong></h4>
                    <br>
                    <div class="bult">{{$data->description}}</div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif

    <div class="modal fade" id="exampleModalD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content" style="background: #fff;    border-radius: 10px;">
                <div class="modal-header" style="border-bottom:none;    padding: 9px 20px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow-y: scroll; height: 500px;">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: #000; ">Select City </h5>
                    <hr>
                    <p>Top Cities</p>

                    <ul class="topcity">
                        @if($cities)
                            @foreach ($cities as $data)
                                @if($data->is_top =='yes')
                                <li>{{$data->name}}</li>
                                @endif
                            @endforeach
                        @endif
                    </ul>


                    <hr>
                    <p>Other Cities</p>
                    <ul class="othercity">
                        @if($cities)
                            @foreach ($cities as $data)
                                @if($data->is_top !='yes')
                                    <li>{{$data->name}}</li>
                                @endif
                            @endforeach
                        @endif
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="    background: no-repeat; border-radius: 10px; border: none;">
                <div class="modal-header" style="border-bottom:none;    padding: 9px 20px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="myCard">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="myLeftCtn" id="loginForm">
                                        <form class="myForm text-center"  name="loginForm"  rent-form="true" method="POST" action="{{ url('store/login') }}">
                                            @csrf
                                            <header>Login</header>
                                            <div class="form-group">
                                                <select name="country_code" style="height: 36px; border-right: 4px solid; width: 55px; background: transparent;">
                                                    <option value="+91">+91</option>
                                                    <option value="+92">+92</option>
                                                    <option value="+93">+93</option>
                                                    <option value="+93">+94</option>
                                                    <option value="+01">+01</option>
                                                </select>
                                                <input class="myInput" name="mobile" placeholder="Mobile No" type="text" id="mobile" required>
                                            </div>
                                            <input type="submit" class="butt" value="Submit">
                                        </form>
                                    </div>

                                    <div class="myLeftCtn hide" id="otpForm">
                                        <form class="myForm text-center"  name="otpForm"  rent-form="true" method="POST" action="{{ url('store/otp-login') }}">
                                            @csrf
                                            <header>Login</header>
                                            <div class="form-group">
                                                <label for="OTP" class="form-label pr-4 float-right" style="cursor: pointer;"><a href="#" rent-back="true"> Back </a></label>
                                                <input class="myInput" name="OTP" placeholder="Please Enter OTP" type="text" id="otp" required>
                                                <label for="OTP" class="form-label pr-4 float-right" style="cursor: pointer;">
                                                    <a href="#" rent-resent="true" id="resend">Resend OTP</a>
                                                </label>
                                            </div>
                                            <input type="submit" class="butt" value="Submit">
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="myRightCtn">
                                        <div class="box">
                                            <header>Hello World!</header>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam.
                                            </p><br>
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


    <div class="modal fade" id="exampleModalotp" tabindex="-1" role="dialog" aria-labelledby="exampleModalotp"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="    background: no-repeat; border-radius: 10px; border: none;">
                <div class="modal-header" style="border-bottom:none;    padding: 9px 20px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="myCard">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="myLeftCtn">
                                        <form class="myForm text-center">
                                            <header> OTP Verification</header>
                                            <div class="form-group">
                                                <div class="card p-2 text-center">
                                                    <h6>Please enter the one time password <br> to verify your account</h6>
                                                    <br>
                                                    <div><span>A code has been sent to</span> <small>*******9897</small>
                                                    </div>
                                                    <br>
                                                    <div id="otp"
                                                         class="inputs d-flex flex-row justify-content-center mt-2"><input
                                                            class="m-2 text-center form-control rounded" type="text"
                                                            id="first" maxlength="1"/> <input
                                                            class="m-2 text-center form-control rounded" type="text"
                                                            id="second" maxlength="1"/> <input
                                                            class="m-2 text-center form-control rounded" type="text"
                                                            id="third" maxlength="1"/> <input
                                                            class="m-2 text-center form-control rounded" type="text"
                                                            id="fourth" maxlength="1"/></div>
                                                    <div class="mt-4"><input type="submit" class="butt" value="Validate">
                                                    </div>
                                                    <div class="card-2" style="padding-top:20px;">
                                                        <div
                                                            class="content d-flex justify-content-center align-items-center">
                                                            <span>Didn't get the code </span> <a href="#"
                                                                                                 class="text-decoration-none ms-3"
                                                                                                 style="color:#F00; font-weight:600;">&nbsp;
                                                                Resend</a></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="myRightCtn">
                                        <div class="box">
                                            <header>Hello World!</header>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam.</p><br>

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

    <div class="modal fade" id="exampleModalemail" tabindex="-1" role="dialog" aria-labelledby="exampleModalotp"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content" style="    background: no-repeat; border-radius: 10px; border: none;">
                <div class="modal-header" style="border-bottom:none;    padding: 9px 20px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="container">
                        <div class="myCard">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="myLeftCtn">
                                        <form class="myForm text-center" >
                                            @csrf
                                            <header> Login Details</header>
                                            <div class="form-group">
                                                <input class="myInput mynput1" placeholder="Name" type="text" id="name"
                                                       required>
                                            </div>
                                            <div class="form-group">
                                                <input class="myInput mynput1" placeholder="Email" type="text" id="email"
                                                       required>

                                            </div>

                                            <input type="submit" class="butt" value="Submit">

                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="myRightCtn">
                                        <div class="box">
                                            <header>Hello World!</header>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna
                                                aliqua. Ut enim ad minim veniam.</p><br>

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


    <div class="x_ln_car_main_wrapper float_left padding_tb_50">
        <div class="container" style=" padding: 30px; border-radius: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_ln_car_heading_wrapper float_left">
                        <h3>What's New </h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="btc_ln_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            @if($coupon)
                                @foreach ($coupon as $key=>$data)
                                <div class="item">
                                    <div class="btc_team_slider_cont_main_wrapper">
                                        <div class="btc_ln_img_wrapper float_left"><img
                                                src="https://revvselfdrivecar.s3.us-west-2.amazonaws.com/5+days.png"
                                                alt="team_img1" data-toggle="modal" data-target="{{'#couponModal'.$key}}"></div>
                                    </div>
                                </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="x_ln_car_main_wrapper float_left padding_tb_50" style="background: #f1f4f8;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_ln_car_heading_wrapper float_left">
                        <h3>Our Fleet </h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="btc_ln_slider_wrapper2 ">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="btc_team_slider_cont_main_wrapper">
                                    <div class="btc_ln_img_wrapper float_left">
                                        <div class="fleet_card">
                                            <div class="fleet_card-subContainer">
                                                <div class="fleet_card--bikeName">Honda Activa 3G</div>
                                                <img src="https://www.rentnhop.com/uploads/product/new-honda-dio-dlx.jpeg"
                                                     class="fleet_card--bikeImage lozad">
                                                <input type="hidden" name="Honda Activa 3G">
                                            </div>
                                            <p class="fleet_card--bikePrice"> ₹19/hour</p>
                                            <button class="fleet_card--bookButton btn" data-bike-model-id="2">BOOK NOW
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="btc_team_slider_cont_main_wrapper">
                                    <div class="btc_ln_img_wrapper float_left">
                                        <div class="fleet_card">
                                            <div class="fleet_card-subContainer">
                                                <div class="fleet_card--bikeName">Honda Activa 3G</div>
                                                <img src="https://www.rentnhop.com/uploads/product/new-honda-dio-dlx.jpeg"
                                                     class="fleet_card--bikeImage lozad">
                                                <input type="hidden" name="Honda Activa 3G">
                                            </div>
                                            <p class="fleet_card--bikePrice"> ₹19/hour</p>
                                            <button class="fleet_card--bookButton btn" data-bike-model-id="2">BOOK NOW
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="btc_team_slider_cont_main_wrapper">
                                    <div class="btc_ln_img_wrapper float_left">
                                        <div class="fleet_card">
                                            <div class="fleet_card-subContainer">
                                                <div class="fleet_card--bikeName">Honda Activa 3G</div>
                                                <img src="https://www.rentnhop.com/uploads/product/new-honda-dio-dlx.jpeg"
                                                     class="fleet_card--bikeImage lozad">
                                                <input type="hidden" name="Honda Activa 3G">
                                            </div>
                                            <p class="fleet_card--bikePrice"> ₹19/hour</p>
                                            <button class="fleet_card--bookButton btn" data-bike-model-id="2">BOOK NOW
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="btc_team_slider_cont_main_wrapper">
                                    <div class="btc_ln_img_wrapper float_left">
                                        <div class="fleet_card">
                                            <div class="fleet_card-subContainer">
                                                <div class="fleet_card--bikeName">Honda Activa 3G</div>
                                                <img src="https://www.rentnhop.com/uploads/product/new-honda-dio-dlx.jpeg"
                                                     class="fleet_card--bikeImage lozad">
                                                <input type="hidden" name="Honda Activa 3G">
                                            </div>
                                            <p class="fleet_card--bikePrice"> ₹19/hour</p>
                                            <button class="fleet_card--bookButton btn" data-bike-model-id="2">BOOK NOW
                                            </button>
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


    <div class="x_ln_car_main_wrapper float_left padding_tb_50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_ln_car_heading_wrapper float_left">
                        <h3>Trip Memories</h3>
                    </div>
                </div>
                <div class="col-md-12 tz-gallery">
                    <div class="btc_ln_slider_wrapper3">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="glry ">
                                    <a class="lightbox" href="img/trip/(2).jpeg">
                                        <img src="{{asset('front/img/trip/(2).jpeg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="glry ">
                                    <a class="lightbox" href="img/trip/(2).jpeg">
                                        <img src="{{asset('front/img/trip/(2).jpeg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="glry ">
                                    <a class="lightbox" href="img/trip/(2).jpeg">
                                        <img src="{{asset('front/img/trip/(2).jpeg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="glry ">
                                    <a class="lightbox" href="img/trip/(2).jpeg">
                                        <img src="{{asset('front/img/trip/(2).jpeg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="glry ">
                                    <a class="lightbox" href="img/trip/(2).jpeg">
                                        <img src="{{asset('front/img/trip/(2).jpeg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="glry ">
                                    <a class="lightbox" href="img/trip/(2).jpeg">
                                        <img src="{{asset('front/img/trip/(2).jpeg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="x_offer_car_main_wrapper float_left padding_tb_50">
        <div class="container" style="">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_ln_car_heading_wrapper float_left">
                        <h3>Our Customer Experiences</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="screenshot">
                        <div class="owl-carousel screen nplr screen-loop">
                            <div>
                                <div class="card  valign-wrapper">
                                    <!-- Client's image -->
                                    <div class="card-image"><img src="{{asset('front/images/client_1.jpg')}}" alt="img">
                                    </div>
                                    <!-- /Client's image -->
                                    <div class="card-content center-align valign">
                                        <div class="testi_slide_star"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i
                                                class="fa fa-star-o"></i></div>
                                        <!-- Client's Feedback -->
                                        <p>" I don't always clap, but when I do, it's because of Sella. We can't understand
                                            how we've been living without Sella. "</p>
                                        <!-- /Client's Feedback -->
                                        <!-- Client's Name -->
                                        <p class="card-title">Irene Marita <span>Support Manager @ Echo</span></p>
                                        <!-- /Client's Name -->
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card  valign-wrapper">
                                    <!-- Client's image -->
                                    <div class="card-image"><img src="{{asset('front/images/client_2.jpg')}}" alt="img">
                                    </div>
                                    <!-- /Client's image -->
                                    <div class="card-content center-align valign">
                                        <div class="testi_slide_star"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i
                                                class="fa fa-star-o"></i></div>
                                        <!-- Client's Feedback -->
                                        <p>" I don't always clap, but when I do, it's because of Sella. We can't understand
                                            how we've been living without Sella. "</p>
                                        <!-- /Client's Feedback -->
                                        <!-- Client's Name -->
                                        <p class="card-title">Irene Marita <span>Support Manager @ Echo</span></p>
                                        <!-- /Client's Name -->
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card  valign-wrapper">
                                    <!-- Client's image -->
                                    <div class="card-image"><img src="{{asset('front/images/client_1.jpg')}}" alt="img">
                                    </div>
                                    <!-- /Client's image -->
                                    <div class="card-content center-align valign">
                                        <div class="testi_slide_star"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i
                                                class="fa fa-star-o"></i></div>
                                        <!-- Client's Feedback -->
                                        <p>" I don't always clap, but when I do, it's because of Sella. We can't understand
                                            how we've been living without Sella. "</p>
                                        <!-- /Client's Feedback -->
                                        <!-- Client's Name -->
                                        <p class="card-title">Irene Marita <span>Support Manager @ Echo</span></p>
                                        <!-- /Client's Name -->
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card  valign-wrapper">
                                    <!-- Client's image -->
                                    <div class="card-image"><img src="{{asset('front/images/client_4.jpg')}}" alt="img"></div>
                                    <!-- /Client's image -->
                                    <div class="card-content center-align valign">
                                        <div class="testi_slide_star"><i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i
                                                class="fa fa-star-o"></i></div>
                                        <!-- Client's Feedback -->
                                        <p>" I don't always clap, but when I do, it's because of Sella. We can't understand
                                            how we've been living without Sella. "</p>
                                        <!-- /Client's Feedback -->
                                        <!-- Client's Name -->
                                        <p class="card-title">Irene Marita <span>Support Manager @ Echo</span></p>
                                        <!-- /Client's Name -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="x_counter_main_wrapper">
        <div class="x_counter_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="x_counter_car_heading_wrapper float_left">
                        <h3>How It Works </h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="x_cou_main_box_wrapper">
                        <div class="x_icon"><img src="https://www.rentnhop.com/images/booking-1.png" style="width:70px;">
                        </div>
                        <h5><span>1.</span> <a href="#">Find your Ride</a></h5>
                        <p>Select your Favorite Bike, Pickup/Drop Date & Time and get ready to Hop! Hassle free discovery
                            and guaranteed best deals.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="x_cou_main_box_wrapper">
                        <div class="x_icon"><i class="flaticon-calendar"></i></div>
                        <h5><span>2.</span> <a href="#">Confirm Booking</a></h5>
                        <p>Go ahead and book with our simple to understand rental plans. Just pay 20% in advance and get
                            instant confirmation of your booking.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="x_cou_main_box_wrapper x_cou_main_box_wrapper_last">
                        <div class="x_icon"><i class="flaticon-emoticon-square-smiling-face-with-closed-eyes"></i></div>
                        <h5><span>3.</span> <a href="#">Pickup & Return</a></h5>
                        <p>Complete your e-KYC and pay remaining amount and you are ready to go.On Return just handover the
                            keys and take your security deposit back. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="btc_team_main_wrapper">
        <div class="btc_team_img_overlay"></div>
        <div class="container" style="background:#fff; border-radius: 30px;">

            <div class="btc_team_left_wrapper">
                <h3>Get inspiration <br>
                    for your next trip</h3>
                <p> publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the
                    visual. </p>
            </div>
            <div class="btc_team_right_wrapper">
                <div class="btc_team_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="btc_team_slider_cont_main_wrapper">
                                <div class="btc_team_img_wrapper"><img src="{{asset('front/images/t1.jpg')}}"
                                                                       alt="team_img1">
                                    <div class="x_team_label_wrapper">
                                        <p>40% OFF</p>
                                    </div>
                                </div>
                                <div class="btc_team_img_cont_wrapper">
                                    <h4><a href="#">Paris, France</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="btc_team_slider_cont_main_wrapper">
                                <div class="btc_team_img_wrapper"><img src="{{asset('front/images/t2.jpg')}}"
                                                                       alt="team_img1">
                                    <div class="x_team_label_wrapper">
                                        <p>40% OFF</p>
                                    </div>
                                </div>
                                <div class="btc_team_img_cont_wrapper">
                                    <h4><a href="#">los Angeles, usa</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="btc_team_slider_cont_main_wrapper">
                                <div class="btc_team_img_wrapper"><img src="{{asset('front/images/t3.jpg')}}"
                                                                       alt="team_img1">
                                    <div class="x_team_label_wrapper">
                                        <p>40% OFF</p>
                                    </div>
                                </div>
                                <div class="btc_team_img_cont_wrapper">
                                    <h4><a href="#">Agra, india</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- btc team Wrapper End -->
@endsection
