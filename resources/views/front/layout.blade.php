<!DOCTYPE html>

<html lang="zxx">
<!--[endif]-->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>
    <meta charset="utf-8"/>
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

    <meta name="MobileOptimized" content="320"/>


    <link href="{{asset('front/css/xpedia.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/css/rdx.css')}}" rel="stylesheet"/>

    {{-- <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet"/>--}}
    {{--<link href="{{asset('front/css/style.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/css/reset.css')}}" rel="stylesheet"/>--}}
    {{--<link href="{{asset('front/css/owl.carousel.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/css/owl.theme.default.css')}}" rel="stylesheet"/>--}}
    {{--<link href="{{asset('front/css/nice-select.css')}}" rel="stylesheet"/>--}}
    {{-- <link href="{{asset('front/css/magnific-popup.css')}}" rel="stylesheet"/>--}}
    {{--<link href="{{asset('front/css/fonts.css')}}" rel="stylesheet"/>--}}
    {{--<link href="{{asset('front/css/font-awesome.css')}}" rel="stylesheet"/>--}}
    {{--<link href="{{asset('front/css/flaticon.css')}}" rel="stylesheet"/>--}}
    {{-- <link href="{{asset('front/css/animate.css')}}" rel="stylesheet"/>--}}
    <link href="{{asset('front/dist/bootstrap-datetimepicker.min.css')}}" media="screen"/>


    <!--favicon-->
    <link rel="shortcut icon" href="{{asset('front/images/fevicon1.png')}}" type="image/png"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/6.0.0-beta2/css/tempus-dominus.min.css"/>


    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">


    <style>
        .hide{
            display: none;
        }

        .plp-value-prop-card {
            padding-left: 0;
            padding-top: 20px;
            width: 100%;
        }
    </style>


    <style>
        #navbar1 {
            background-color: #333;
            position: fixed;
            top: -64px;
            left: 0px;
            width: 100%;
            z-index: 9999;
            display: block;
            transition: top 0.6s;
        }

        #navbar1 a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 15px;
            text-decoration: none;
            font-size: 17px;
        }

        #navbar1 a:hover {
            background-color: #ddd;
            color: black;
        }


        .st-home-desktop .searchBarContainerV1 {
            background: #fff;
            margin-top: 30px;
            padding: 40px 50px 0;
            border-radius: 14px;
            box-shadow: 0 3px 6px 0 rgb(0 0 0 / 16%);
            background-color: #fff;
            width: 530px;
        }

        .st-not-selected {
            height: 490px !important;
        }

        .productTypeTabDivRental {
            margin: 0 0 32px;
            border-radius: 18px;
            border: 4px solid #49a6ba;
            background-color: #49a6ba;
            height: 78px;
        }

        .productTypeTabRental1 {
            box-shadow: 0 7px 6px 0 rgb(0 0 0 / 16%);
            background-color: #fff;
            border-radius: 12px;
            padding: 10px;
            margin: 4px 5px 0;
            cursor: pointer;
        }

        .chooseProductTabHRental1, .chooseProductTabHRental2 {
            font-family: Poppins;
            font-size: 20px;
            font-weight: 700;
            text-align: center;
            line-height: 1.4;
        }

        .chooseProductTabDRental1, .chooseProductTabDRental2 {
            font-family: Poppins;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
            text-align: center;
            margin: 0;
        }

        .arrow-downRental {
            width: 50px;
            height: 25px;
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            overflow: hidden;
        }

        .arrow-downRental:after {
            border-radius: 2px;
            content: "";
            position: absolute;
            width: 22px;
            height: 22px;
            background: #fff;
            -webkit-transform: translateX(-50%) translateY(-50%) rotate(
                45deg);
            transform: translateX(-50%) translateY(-50%) rotate(
                45deg);
            top: -3px;
            left: 50%;
            box-shadow: 2px 2px 2px 0 rgb(0 0 0 / 7%);
        }

        .logo-rental {
            height: 28px;
            width: 100%;
            object-fit: contain;
            margin-bottom: 11px;
        }

        .rentalHomeHeading {
            font-family: Poppins;
            font-size: 18px;
            font-weight: 400;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.83;
            letter-spacing: normal;
            text-align: center;
            color: #5a5254;
            margin-bottom: 30px;
            line-height: 1;
        }


        .search-sec {
            padding: .5rem;
        }

        .search-slt {
            display: block;
            width: 100%;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #55595c;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            height: calc(3rem + 2px) !important;
            border-radius: 0;
        }

        .wrn-btn {
            width: 100%;
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
            height: calc(3rem + 2px) !important;
            border-radius: 0;
        }


        li.sub a {
            border: 1px solid;

            border-radius: 4px;
        }

    </style>
    {{--    <script>
            // When the user scrolls down 20px from the top of the document, slide down the navbar
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("navbar1").style.top = "64px";
                } else {
                    document.getElementById("navbar1").style.top = "0px";
                }
            }
        </script>--}}
</head>

<body>
<!-- preloader Start -->

<!-- hs Navigation Start -->
<div class="hs_navigation_header_wrapper">
    <div class="container">
        <div class="row">
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="hs_logo_wrapper d-none d-sm-none d-xs-none d-md-block"><a href="{{url('/')}}"> <img
                            src="{{asset('front/img/logo.png')}}" class="img-responsive" alt="logo" title="Logo"/> </a>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="hs_navi_cart_wrapper  d-none d-sm-none d-xs-none d-md-block d-lg-block d-xl-block">
                    <div class="dropdown-wrapper menu-button menu_button_end ">
                        <a class="menu-button">
                            <i class="fa fa-motorcycle" aria-hidden="true"></i>
                            <span
                                header-cart-count="true"> @if($cartProducts = session('cartProducts')) {{ count($cartProducts) }} @else {{ 0 }} @endif</span>
                        </a>
                        <div class="drop-menu" header-cart-dropdown="true">
                            @if($cartProducts)
                                @foreach($cartProducts as $key=>$data)

                                    <div class="cc_cart_wrapper1  @if($key!=0) {{ 'cc_cart_wrapper2' }} @endif">
                                        <div class="cc_cart_img_wrapper">
                                            <img src="/images/{{ $data['image'] }}" height="100" width="100"
                                                 alt="cart_img"/></div>
                                        <div class="cc_cart_cont_wrapper">
                                            <h4><a>{{ $data['name'] }}</a></h4>
                                            <p>Quantity : {{ $data['qty'] }} ×
                                                ₹{{ ($data['selling_price'])/($data['qty']) }}</p>
                                            <h5>₹{{ $data['selling_price'] }}</h5>
                                            @if( $data['vehicle_id'])
                                                <button type="button" class="close" rent-cart-common="true"
                                                        data-method="POST"
                                                        data-href="{{ url('cart/cart-delete-item') }}"
                                                        data-reference-id="{{ $key }}">&times;
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                                <div class="cc_cart_wrapper1 cc_cart_wrapper2">
                                    <div class="checkout_btn_resto"><a href="{{ url('cart/checkout')  }}">Checkout</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <nav class="hs_main_menu d-none d-sm-none d-xs-none d-md-block">
                    <ul>
                        <li class="sub"><a href="#"> Ladakh Trip</a> &nbsp;</li>
                        <!-- <li class="sub"><a href="#"> Login </a> </li>-->

                        </li>
                        @if($users =  Auth::user())
                            <li>
                                <a style="background: #49a6ba;color: #fff; border-radius: 10px; font-weight: 300;">
                                    <strong>&nbsp; @if($users->name) {{ $users->name }} @else {{ 'Hello Rider' }} @endif </strong></a>
                            </li>
                        @else
                            <li>
                                <a
                                    style="background: #49a6ba;color: #fff; border-radius: 10px; font-weight: 300;"
                                    data-toggle="modal" data-target="#loginModal"> <strong>&nbsp; Login </strong></a>
                            </li>
                        @endif
                    </ul>
                </nav>
                <header class="mobail_menu d-none d-block d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <div class="hs_logo"><a href="#"> <img src="{{asset('front/images/logo.png')}}"
                                                                       alt="Logo" title="Logo"> </a></div>
                            </div>
                            <div class="col-6">

                                <div class="cd-dropdown-wrapper">

                                    <div class="trp"><a href="#"> Ladakh Trip </a></div>


                                    <div class="dropdown-wrapper menu-button menu_button_end ">
                                        <a class="menu-button" href="#"> <i class="fa fa-motorcycle" aria-hidden="true"
                                                                            style="font-size: 22px; color: #fff;"></i><span>3</span></a>
                                        <div class="drop-menu">
                                            <div class="cc_cart_wrapper1">
                                                <div class="cc_cart_img_wrapper"><img
                                                        src="{{asset('front/images/cart_img.jpg')}}" alt="cart_img">
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- .cd-dropdown-wrapper -->
                </header>
            </div>
        </div>
    </div>
</div>
<div class="main hidden-xs">

    <!--<div id="navbar1">
   <section class="search-sec">
      <div class="container">
          <form action="#" method="post" novalidate="novalidate">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="row">
                          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                              <input type="text" class="form-control search-slt" placeholder="Delhi NCR">
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                              <input type="text" class="form-control search-slt" placeholder="Start time">
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                              <input type="text" class="form-control search-slt" placeholder="End time">
                          </div>

                          <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                              <button type="button" class="btn btn-danger wrn-btn">Search</button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </section>
  </div>-->

</div>
<!-- hs Navigation End -->


<style>
    .carousel-item {

        height: auto;
    }

    /*
    Removes white gap between slides
    */
    .carousel {
        background: #444;
    }

    /*
    Forces image to be 100% width and not max width of 100%
    */
    .carousel-item .img-fluid {
        width: 100%;
        height: auto;
    }

    /*
    anchors are inline so you need ot make them block to go full width
    */
    .carousel-item a {
        display: block;
        width: 100%;
    }

    .book {
        position: absolute;
        left: 8%;
        top: 15%;
        z-index: 99;
    }

</style>
<style>

    @media only screen and (max-width: 768px) {
        .x_slider_btn a {
            padding: 12px 65px !important;
        }

        .book {
            position: relative;
            padding: 0;
        }

        .hs_navigation_header_wrapper {
            background: #49a6ba;
            box-shadow: none;
            height: 90px;
        }

        .hs_logo {
            padding-top: 20px;
        }

        .x_slider_form_main_wrapper {
            background: #49a6ba;
            border-radius: 0;
        }

        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            font-size: 14px;
        }

        nav > div a.nav-item.nav-link, nav > div a.nav-item.nav-link {
            font-size: 14px;
        }

        nav > div a.nav-item.nav-link, nav > div a.nav-item.nav-link {
            padding: 18px 10px;
        }

        .x_slider_form_main_wrapper {
            padding: 10px 0px;
        }

        nav > .nav.nav-tabs {
            background: #4a8e9d;
            padding: 10px;
        }

        nav > div a.nav-item.nav-link, nav > div a.nav-item.nav-link {
            background: #4a8e9d;
        }

        .inst h1 {
            color: #ffffff;
        }

        .inst {
            padding-top: 20px;
        }

        .mobp {
            padding: 20px !important;
            border-radius: 15px;
            background: #fff;
        }

        .x_slider_btn {
            padding-top: 30px;
            padding-bottom: 15px;
        }

        .trp {
            border: 2px solid #fff;
            padding: 5px 5px;
            border-radius: 10px;
        }

        .trp a {
            color: #fff;
        }

        .cd-dropdown-wrapper {
            float: none;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .dropdown-wrapper > .menu-button {
            position: relative;
            top: -30px;
            left: 115%;
        }

        .dropdown-wrapper.menu-button.menu_button_end span {
            position: absolute;
            top: -16px;
            color: #fff;
        }

        .book {
            left: 0%;
        }

    }
</style>

@yield('content')

@if(session('Message'))
    <div class="message {{ $message = session('Message')['Class']  }}"
         onclick="this.classList.add('hide');">{{ $message = session('Message')['Message'] }}</div>
@endif
<div data-message="true"></div>

<!-- x booking Wrapper Start -->
<div class="x_booking_main_wrapper float_left">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="x_book_logo_wrapper float_left"><img src="{{asset('front/img/logo.png')}}"
                                                                 alt="logo" style="width:120px;"></div>
            </div>
            <div class="col-md-6">
                <div class="x_book_logo_heading_wrapper float_left">
                    <h3>We're Here, Let's Talk</h3>
                    <p>+91 9958 291 193<br>
                        contact@rentnhop.com</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="x_book_logo_btn float_left">
                    <ul>
                        <li><a href="#">Contact Us <i class="fa fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- x booking Wrapper End -->


<div class="x_footer_bottom_main_wrapper float_left">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_footer_bottom_box_wrapper float_left">
                    <h3>About Us</h3>
                    <p>RentnHop is a leading bike rental company based out of Delhi. We have been offering wide range of
                        bikes on rent in 12 cities for the past three years. </p>
                    <span><a href="#">Read More &nbsp;<i class="fa fa-angle-double-right"></i></a></span>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_footer_bottom_box_wrapper_second float_left">
                    <h3>CUSTOMER SERVICE</h3>
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; FAQs</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>&nbsp; Contact</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; About</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Terms & Condition</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> &nbsp; Blog </a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="x_footer_bottom_box_wrapper_third float_left">
                    <h3>CONTACT INFO</h3>
                    <div class="x_footer_bottom_icon_section float_left">
                        <div class="x_footer_bottom_icon"><i class="flaticon-phone-call"></i></div>
                        <div class="x_footer_bottom_icon_cont">
                            <p>+91 9958 291 193</p>
                        </div>
                    </div>
                    <div class="x_footer_bottom_icon_section x_footer_bottom_icon_section2 float_left">
                        <div class="x_footer_bottom_icon x_footer_bottom_icon2"><i class="flaticon-mail-send"></i></div>
                        <div class="x_footer_bottom_icon_cont">
                            <p><a href="#">contact@rentnhop.com</a></p>
                        </div>
                    </div>
                    <div class="x_footer_bottom_icon_section x_footer_bottom_icon_section2 float_left">
                        <div class="x_footer_bottom_icon x_footer_bottom_icon3"><i class="fa fa-map-marker"></i></div>
                        <div class="x_footer_bottom_icon_cont x_footer_bottom_icon_cont2">
                            <h4><a href="#">View On Map</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="x_copyr_main_wrapper float_left">
    <!--<a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>-->
    <div class="container">
        <p>Copyright © 2018 by Rentnhop. Made with ❤️ by team Rentnhop</p>
    </div>


</div>


<div class="x_partner_main_wrapper float_left padding_tb_50">
    <div class="container cityfooter" style="margin-top:30px;">
        <div class="row">
            <div class="col-12 col-md-12">
                <h3 style="font-weight:600; padding-bottom:30px;">We are available at these popular Cities </h3>
            </div>
            <div class="col-12 col-md-4">
                <ul class="serviceable-cities">
                    <li><a href="/car-rental/bangalore">Car Rental in Bangalore</a></li>
                    <li><a href="/car-rental/hyderabad">Car Rental in Hyderabad</a></li>
                    <li><a href="/car-rental/mumbai">Car Rental in Mumbai</a></li>
                    <li><a href="/car-rental/delhi-ncr">Car Rental in Delhi-NCR</a></li>
                    <li><a href="/car-rental/chennai">Car Rental in Chennai</a></li>
                    <li><a href="/car-rental/pune">Car Rental in Pune</a></li>

                </ul>
            </div>
            <div class="col-12 col-md-4">
                <ul class="serviceable-cities">
                    <li><a href="/car-rental/bhubaneswar">Car Rental in Bhubaneswar</a></li>
                    <li><a href="/car-rental/chandigarh">Car Rental in Chandigarh</a></li>
                    <li><a href="/car-rental/coimbatore">Car Rental in Coimbatore</a></li>
                    <li><a href="/car-rental/jaipur">Car Rental in Jaipur</a></li>
                    <li><a href="/car-rental/kochi">Car Rental in Kochi</a></li>
                    <li><a href="/car-rental/mangalore">Car Rental in Mangalore</a></li>

                </ul>
            </div>
            <div class="col-12 col-md-4">
                <ul class="serviceable-cities">
                    <li><a href="/car-rental/surat">Car Rental in Surat</a></li>
                    <li><a href="/car-rental/tirupati">Car Rental in Tirupati</a></li>
                    <li><a href="/car-rental/trivandrum">Car Rental in Trivandrum</a></li>
                    <li><a href="/car-rental/vadodara">Car Rental in Vadodara</a></li>
                    <li><a href="/car-rental/vijayawada">Car Rental in Vijayawada</a></li>
                    <li><a href="/car-rental/vizag">Car Rental in Vizag</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>


<div class="x_partner_main_wrapper float_left ">
    <div class="container " style="margin-top:30px;">
        <div class="row">
            <div class="col-12 col-md-12">
                <article class="page-article">
                    <div class="page-section-header"><h2 class="header-2 txt-light pa-title">Self Drive Cars in
                            Mumbai</h2></div>
                    <p class="content-1 txt-secondary pa-content">The business capital of India, Mumbai, formerly
                        Bombay, is known to be the liveliest of all cities. The most populous city in India houses the
                        most prolific film industry. This megacity is the financial, commercial and entertainment
                        capital of India which makes it an overt option for one to move to the city and settle down
                        there. And consequently, it comes as no surprise, to see a decent hike in the number of self
                        drive car rentals in Mumbai.</p></article>
            </div>

            <br>
            <div class="col-12 col-md-12">
                <article class="page-article">
                    <div class="page-section-header"><h2 class="header-2 txt-light pa-title">Self Drive Cars in
                            Mumbai</h2></div>
                    <p class="content-1 txt-secondary pa-content">The business capital of India, Mumbai, formerly
                        Bombay, is known to be the liveliest of all cities. The most populous city in India houses the
                        most prolific film industry. This megacity is the financial, commercial and entertainment
                        capital of India which makes it an overt option for one to move to the city and settle down
                        there. And consequently, it comes as no surprise, to see a decent hike in the number of self
                        drive car rentals in Mumbai.</p></article>
            </div>

            <br>
            <div class="col-12 col-md-12">
                <article class="page-article">
                    <div class="page-section-header"><h2 class="header-2 txt-light pa-title">Self Drive Cars in
                            Mumbai</h2></div>
                    <p class="content-1 txt-secondary pa-content">The business capital of India, Mumbai, formerly
                        Bombay, is known to be the liveliest of all cities. The most populous city in India houses the
                        most prolific film industry. This megacity is the financial, commercial and entertainment
                        capital of India which makes it an overt option for one to move to the city and settle down
                        there. And consequently, it comes as no surprise, to see a decent hike in the number of self
                        drive car rentals in Mumbai.</p></article>
            </div>
            <br>

            <div class="col-12 col-md-12">
                <article class="page-article">
                    <div class="page-section-header"><h2 class="header-2 txt-light pa-title">Self Drive Cars in
                            Mumbai</h2></div>
                    <p class="content-1 txt-secondary pa-content">The business capital of India, Mumbai, formerly
                        Bombay, is known to be the liveliest of all cities. The most populous city in India houses the
                        most prolific film industry. This megacity is the financial, commercial and entertainment
                        capital of India which makes it an overt option for one to move to the city and settle down
                        there. And consequently, it comes as no surprise, to see a decent hike in the number of self
                        drive car rentals in Mumbai.</p></article>
            </div>

        </div>

    </div>
</div>

<div class="social">
    <div class="sticky-container">
        <div class="menu-button1"><i class="fa fa-whatsapp" aria-hidden="true" style="font-style:normal;"></i>
            <a target="_blank" href="https://wa.me/+919958291193"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a href="tel:+919958291193"><i class="fa fa-phone" aria-hidden="true"></i></a>

        </div>
    </div>
</div>


{{--login modal start--}}

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="    background: no-repeat; border-radius: 10px; border: none;">
            <div class="modal-header" style="border-bottom:none;    padding: 9px 20px;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="myCard">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="myLeftCtn" id="loginForm">
                                    <form class="myForm text-center" name="loginForm" rent-form="true" method="POST"
                                          action="{{ url('customer/login') }}">
                                        @csrf
                                        <header>Login</header>
                                        <div class="form-group">
                                            <select name="country_code"
                                                    style="height: 36px; border-right: 4px solid; width: 55px; background: transparent;">
                                                <option value="+91">+91</option>
                                                <option value="+92">+92</option>
                                                <option value="+93">+93</option>
                                                <option value="+93">+94</option>
                                                <option value="+01">+01</option>
                                            </select>
                                            <input class="myInput" name="mobile" placeholder="Mobile No" type="text"
                                                   id="mobile" required>
                                        </div>
                                        <input type="submit" class="butt" value="Submit">
                                    </form>
                                </div>

                                <div class="myLeftCtn hide" id="otpForm">
                                    <form class="myForm text-center" name="otpForm" rent-form="true" method="POST"
                                          action="{{ url('customer/otp-login') }}">
                                        @csrf

                                        <header> OTP Verification</header>
                                        <div class="form-group">
                                            <div class="card p-2 text-center">
                                                <h6>Please enter the one time password <br> to verify your account
                                                </h6>
                                                <br>
                                                <div>
                                                    <span>A code has been sent to</span> <small
                                                        rentn-sent-to-otp="true" ></small>
                                                </div>
                                                <br>
                                                <div id="otp"
                                                     class="inputs d-flex flex-row justify-content-center mt-2">
                                                    <input
                                                        class="m-2 text-center form-control rounded" type="text"
                                                        id="first" name="first" maxlength="1"/> <input
                                                        class="m-2 text-center form-control rounded" type="text"
                                                        id="second" name="second" maxlength="1"/> <input
                                                        class="m-2 text-center form-control rounded" type="text"
                                                        id="third" name="third" maxlength="1"/> <input
                                                        class="m-2 text-center form-control rounded" type="text"
                                                        id="fourth" name="fourth" maxlength="1"/>
                                                </div>
                                                <div id="validate-error">

                                                </div>
                                                <div class="mt-4">
                                                    <input type="submit" class="butt" value="Validate">
                                                </div>
                                                <div class="card-2" style="padding-top:20px;">
                                                    <div
                                                        class="content d-flex justify-content-center align-items-center">
                                                        <span>Didn't get the code </span>
                                                        <a class="text-decoration-none ms-3" rent-resent="true" id="resend" style="color:#F00; font-weight:600;">&nbsp;
                                                            Resend
                                                        </a>
                                                    </div>
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


{{--login model end--}}


{{--payment modal start--}}

<!-- Modal -->

<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Proceed to payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('cart/admin-proceed-payment') }}" method="post" rent-form="true">
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-6 pb-2">
                            <label>Rider Name<span>*</span></label>
                            <input name="name" placeholder="Enter Rider Name" class="form-control" type="text" value="">
                        </div>
                        <div class="form-group col-md-6 pb-2">
                            <label>Rider Mobile no<span>*</span></label>
                            <input name="mobile" maxlength="10"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                   placeholder="Enter Rider Mobile no"
                                   class="form-control" type="number">
                        </div>
                        <div class="form-group col-md-6 pb-2">
                            <label>Rider Email Id<span>*</span></label>
                            <input name="email" placeholder="Rider Email Id" class="form-control" type="text" value="">
                        </div>
                        @if($users)
                            @if($users->role->alias=='admin')
                                <div class="form-group col-md-6 pb-2">
                                    <label>Rent Paid<span></span></label>
                                    <input name="rent_paid" placeholder="Rent paid" class="form-control" type="text"
                                           value="">
                                </div>
                            @endif
                        @else
                            <div class="form-group col-md-6 pb-2">
                                <label>Advance Payment (20 %)<span></span></label>
                                <input name="rent_paid" placeholder="Rent paid" class="form-control" type="text"
                                       value="@if(isset($price_breakup)) {{ $price_breakup['partially_amount'] }} @endif"
                                       disabled>
                            </div>
                        @endif
                    </div>

                    <div class="modal-footer">
                        <button type="submit" value="Proceed now" class="btn btn-default"
                                style="background: #49a6ba;color: #fff; border-radius: 10px; font-weight: 300;">Proceed
                            now
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

{{--payment modal end--}}

<input type="hidden" id="url" value="<?php echo url('/');?>">

<script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/modernizr.js') }}"></script>
<script src="{{ asset('front/js/select2.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('front/dist/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>
<script src="{{ asset('front/js/jquery-ui.js') }}"></script>
<script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('front/js/owl.carousel.js') }}"></script>
<script src="{{ asset('front/js/own-menu.js') }}"></script>
<script src="{{ asset('front/js/jquery.bxslider.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('front/js/xpedia.js') }}"></script>

<script src="{{ asset('front/js/custom.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

<script type="text/javascript" language="javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/6.0.0-beta2/js/tempus-dominus.esm.js"></script>


<script>
    baguetteBox.run('.tz-gallery');
</script>
<script>
    var padding_apply = false;
    var nav_init_pos = 0;

    function set_nav_pos() {
        nav_init_pos = $('#action-call').innerHeight() - $('header').innerHeight();
    }

    $(document).ready(function () {
        set_nav_pos(); // initialize scroll triggering position
        $(window).on('resize', function () {
            set_nav_pos(); // re-initialize the position if your header block height change with the resize action
            $(window).trigger('scroll'); // We force update the body padding with the scroll event callback.

        });
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > nav_init_pos) {
                if (!padding_apply) {
                    $('nav').addClass('fixed');
                    $('body').css('padding-top', $('nav').innerHeight());
                    padding_apply = true;
                }
            } else {
                if (padding_apply) {
                    $('nav').removeClass('fixed');
                    $('body').css('padding-top', 0);
                    padding_apply = false;
                }
            }
        });
    });
</script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        minTime: '11:00',
        maxTime: '20:00',
        format: "dd-mm-yyyy HH:ii p",
        showMeridian: 1,
        autoclose: 1,
        todayBtn: 1,
        todayHighlight: 1,
        minView: 1,

        pickerPosition: 'bottom-left',
        startDate: "2022-03-10 01:27",
        min: "2022-03-10 01:27",
        minuteStep: 60,
        /* ----- ASDF ---- */


        /* ----- ASD --- */
    });

    $('.form_datetime').datetimepicker('setHoursDisabled', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 21, 22, 23, 24, 25]);
</script>


<script>
    var padding_apply = false;
    var nav_init_pos = 0;

    function set_nav_pos() {
        nav_init_pos = $('#action-call').innerHeight() - $('header').innerHeight();
    }

    $(document).ready(function () {
        set_nav_pos(); // initialize scroll triggering position
        $(window).on('resize', function () {
            set_nav_pos(); // re-initialize the position if your header block height change with the resize action
            $(window).trigger('scroll'); // We force update the body padding with the scroll event callback.

        });
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > nav_init_pos) {
                if (!padding_apply) {
                    $('nav').addClass('fixed');
                    $('body').css('padding-top', $('nav').innerHeight());
                    padding_apply = true;
                }
            } else {
                if (padding_apply) {
                    $('nav').removeClass('fixed');
                    $('body').css('padding-top', 0);
                    padding_apply = false;
                }
            }
        });
    });

</script>
<script>
    // Linked date and time picker
    // start date date and time picker
    $('#datepicker-start').datetimepicker();

    // End date date and time picker
    $('#datepicker-end').datetimepicker({
        useCurrent: false
    });

    // start date picke on chagne event [select minimun date for end date datepicker]
    $("#datepicker-start").on("dp.change", function (e) {
        $('#datepicker-end').data("DateTimePicker").minDate(e.date);
    });
    // Start date picke on chagne event [select maxmimum date for start date datepicker]
    $("#datepicker-end").on("dp.change", function (e) {
        $('#datepicker-start').data("DateTimePicker").maxDate(e.date);
    });
</script>

<script>

    $('.btn-number').click(function (e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {

                    setTimeout(function () {
                        $(this).attr('disabled', true);
                    }, 10);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    setTimeout(function () {
                        $(this).attr('disabled', true);
                    }, 10);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function () {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function () {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>

</body>
</html>
