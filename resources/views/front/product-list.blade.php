@extends('front.layout')
@section('content')
    <style>
        .fmmaian {
            padding-top: 12px;
            padding-bottom: 10px;
            box-shadow: 0 0px 6px 0 rgb(0 0 0 / 18%);
            background: #ffffff;
        }

        .modify-search {
            padding-top: 77px;
            width: 100%;
            background: #ffffff;
            box-shadow: 0px 0px 8px #a9a7a4;
            z-index: 999;
        }

        .r-1q9bdsx {
            border-radius: 12px;
        }

        .css-1dbjc4n {
            -webkit-box-align: stretch;
            -webkit-box-direction: normal;
            -webkit-box-orient: vertical;
            align-items: stretch;
            border: 0px solid black;
            box-sizing: border-box;
            display: flex;
            flex-basis: auto;
            flex-direction: column;
            flex-shrink: 0;
            margin: 0px;
            min-height: 0px;
            min-width: 0px;
            padding: 0px;
            position: relative;

        }

        .r-13qz1uu {
            width: 100%;
        }

        .r-1pi2tsx {
            height: 100%;
        }

        .css-901oao {
            border: 0px solid black;
            box-sizing: border-box;
            color: rgb(0, 0, 0);
            display: inline;
            margin: 0px;
            padding: 0px;
            white-space: pre-wrap;
            overflow-wrap: break-word;
        }

        .r-70x49a {
            background-color: rgb(244, 247, 248);
        }

        .r-1dna1ie {
            color: rgb(36, 43, 53);
        }

        .r-18u37iz {
            -webkit-box-direction: normal;
            -webkit-box-orient: horizontal;
            flex-direction: row;
        }

        .r-1jk19d6 {
            background-image: linear-gradient(to left, rgb(28, 171, 162), rgb(28, 127, 171));

        }

        .r-1777fci {
            -webkit-box-pack: center;
            justify-content: center;
        }
    </style>
    <div class="modify-search">
        <div class="fmmaian">
            <div class="container">
                <form action="{{url('store/result')}}" method="get" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-3 p-0">
                                    <input type="text" name="city" class="form-control search-slt"
                                           value="{{request()->input('city')}}" placeholder="Delhi NCR"
                                           style="border-radius: 10px 0px 0px 10px; margin-left:10px;">

                                    <input type="hidden" name="city_id" value="value="{{request()->input('city_id')}}"">
                                </div>
                                <div class="col-lg-3 col-md-3 col-3 p-0">
                                    <input type="text" name="from" class="form-control search-slt"
                                           value="{{request()->input('from')}}" placeholder="Start time">
                                </div>
                                <div class="col-lg-3 col-md-3 col-3 p-0">
                                    <input type="text" name="to" class="form-control search-slt"
                                           value="{{request()->input('to')}}" placeholder="End time">
                                </div>
                                <div class="col-lg-3 col-md-3 col-3 p-0">
                                    <button type="button" class="btn btn-danger wrn-btn" style="border-radius: 10px 10px 10px 10px !important;
    border-color: #1c87a9;
    background-image: linear-gradient(to left, rgb(28, 171, 162), rgb(28, 127, 171));
    margin-left: -10px !important;
    text-align: center;
    border: none;">Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="bikecontainer">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 filter">
                    <div class="filbtn"><a href="#">Filter <i class="fa fa-angle-down"></i></a> <a href="#">Sort <i
                                class="fa fa-angle-down"></i></a></div>
                    <style>
                        .filbtn {
                            text-align: right;
                            padding-top: 30px;
                            padding-bottom: 30px;
                        }

                        .filbtn a {
                            background: #1c9ea5;
                            padding: 10px 50px;
                            border-radius: 10px;
                            color: #fff;
                        }
                    </style>
                    <div class="css-1dbjc4n r-1q9bdsx"
                         style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 20px; height: auto; width: auto;    background: #fff;">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="css-1dbjc4n r-1pi2tsx r-13qz1uu"
                                     style="border-bottom-color: rgb(242, 244, 248); border-bottom-width: 0px; border-right-color: rgb(242, 244, 248); border-right-width: 1px; padding: 20px;">
                                    <div class="css-1dbjc4n r-13qz1uu" style="margin-bottom: 19px;">
                                        <div dir="auto" class="css-901oao"
                                             style="color: rgb(41, 40, 37); font-size: 16px;"> Rental Type
                                        </div>
                                    </div>
                                    <div class="css-1dbjc4n r-13qz1uu" style="margin-bottom: 15px;">
                                        <div class="css-1dbjc4n r-70x49a r-1dzdj1l r-13qz1uu" style="padding: 13px;">
                                            <select data-focusable="true"
                                                    class="r-70x49a r-1dna1ie r-1qd0xha r-7cikom r-crgep1 r-13qz1uu"
                                                    style="border-color: rgb(244, 247, 248);">
                                                <option value="0">Select Packege</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Monthly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="css-1dbjc4n r-13qz1uu">
                                        <div class="css-1dbjc4n r-13qz1uu" style="margin-bottom: 19px;">
                                            <div dir="auto" class="css-901oao"
                                                 style="color: rgb(41, 40, 37); font-size: 16px;">Vehicle Type
                                            </div>
                                        </div>
                                        <div class="css-1dbjc4n r-18u37iz r-13qz1uu">
                                            <div class="css-1dbjc4n" style="width: 50%;">
                                                <div class="css-1dbjc4n r-18u37iz r-1777fci r-13qz1uu">
                                                    <div class="css-1dbjc4n" style="width: 25%;">
                                                        <div data-focusable="true" tabindex="0"
                                                             class="css-1dbjc4n r-1awozwy r-1kihuf0 r-1loqt21 r-1777fci r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr"
                                                             style="border-color: rgb(43, 199, 201); border-radius: 8.5px; border-width: 2px; height: 17px; opacity: 1; width: 17px;"></div>
                                                    </div>
                                                    <div class="css-1dbjc4n" style="width: 75%;">
                                                        <div dir="auto" class="css-901oao r-1dna1ie r-1b43r93">With
                                                            Gear
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-1dbjc4n" style="width: 50%;">
                                                <div class="css-1dbjc4n r-18u37iz r-1777fci r-13qz1uu">
                                                    <div class="css-1dbjc4n" style="width: 25%;">
                                                        <div data-focusable="true" tabindex="0"
                                                             class="css-1dbjc4n r-1awozwy r-1kihuf0 r-1loqt21 r-1777fci r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr"
                                                             style="border-color: rgb(43, 199, 201); border-radius: 8.5px; border-width: 2px; height: 17px; opacity: 1; width: 17px;"></div>
                                                    </div>
                                                    <div class="css-1dbjc4n" style="width: 75%;">
                                                        <div dir="auto" class="css-901oao r-1dna1ie r-1b43r93">
                                                            Gearless
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="css-1dbjc4n r-1pi2tsx r-13qz1uu"
                                     style="border-bottom-color: rgb(242, 244, 248); border-bottom-width: 0px; border-right-color: rgb(242, 244, 248); border-right-width: 1px; padding: 20px;">
                                    <div class="css-1dbjc4n r-13qz1uu" style="margin-bottom: 19px;">
                                        <div dir="auto" class="css-901oao"
                                             style="color: rgb(41, 40, 37); font-size: 16px;">Locations
                                        </div>
                                    </div>
                                    <div class="css-1dbjc4n r-13qz1uu" style="margin-bottom: 15px;">
                                        <div class="css-1dbjc4n r-70x49a r-1dzdj1l r-13qz1uu" style="padding: 13px;">
                                            <select data-focusable="true"
                                                    class="r-70x49a r-1dna1ie r-1qd0xha r-7cikom r-crgep1 r-13qz1uu"
                                                    style="border-color: rgb(244, 247, 248);">
                                                <option value="">Select Location</option>
                                                <option value="22">Karol Bagh</option>
                                                <option value="24">Paschim Vihar</option>
                                                <option value="24">Laxmi Nagar</option>
                                                <option value="24">Gurgaon</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="css-1dbjc4n r-1pi2tsx r-13qz1uu"
                                     style="border-bottom-color: rgb(242, 244, 248); border-bottom-width: 0px; border-right-color: rgb(242, 244, 248); border-right-width: 1px; padding: 20px;">
                                    <div class="css-1dbjc4n r-13qz1uu" style="margin-bottom: 19px;">
                                        <div class="css-1dbjc4n r-13qz1uu" style="margin-bottom: 13px;">
                                            <div dir="auto" class="css-901oao"
                                                 style="color: rgb(41, 40, 37); font-size: 16px;">Vehicle Category
                                            </div>
                                        </div>
                                        <div class="css-1dbjc4n r-18u37iz r-13qz1uu"
                                             style="flex-wrap: wrap; margin-bottom: 13px;">
                                            <div class="css-1dbjc4n" style="margin-bottom: 10px; width: 50%;">
                                                <div class="css-1dbjc4n r-18u37iz r-1777fci r-13qz1uu">
                                                    <div class="css-1dbjc4n" style="width: 25%;">
                                                        <div data-focusable="true" tabindex="0"
                                                             class="css-1dbjc4n r-1awozwy r-1kihuf0 r-1loqt21 r-1777fci r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr"
                                                             style="border-color: rgb(43, 199, 201); border-radius: 8.5px; border-width: 2px; height: 17px; opacity: 1; width: 17px;"></div>
                                                    </div>
                                                    <div class="css-1dbjc4n" style="width: 75%;">
                                                        <div dir="auto" class="css-901oao r-1dna1ie r-1b43r93">Sports
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-1dbjc4n" style="margin-bottom: 10px; width: 50%;">
                                                <div class="css-1dbjc4n r-18u37iz r-1777fci r-13qz1uu">
                                                    <div class="css-1dbjc4n" style="width: 25%;">
                                                        <div data-focusable="true" tabindex="0"
                                                             class="css-1dbjc4n r-1awozwy r-1kihuf0 r-1loqt21 r-1777fci r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr"
                                                             style="border-color: rgb(43, 199, 201); border-radius: 8.5px; border-width: 2px; height: 17px; opacity: 1; width: 17px;"></div>
                                                    </div>
                                                    <div class="css-1dbjc4n" style="width: 75%;">
                                                        <div dir="auto" class="css-901oao r-1dna1ie r-1b43r93">Commute
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-1dbjc4n" style="margin-bottom: 10px; width: 50%;">
                                                <div class="css-1dbjc4n r-18u37iz r-1777fci r-13qz1uu">
                                                    <div class="css-1dbjc4n" style="width: 25%;">
                                                        <div data-focusable="true" tabindex="0"
                                                             class="css-1dbjc4n r-1awozwy r-1kihuf0 r-1loqt21 r-1777fci r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr"
                                                             style="border-color: rgb(43, 199, 201); border-radius: 8.5px; border-width: 2px; height: 17px; opacity: 1; width: 17px;"></div>
                                                    </div>
                                                    <div class="css-1dbjc4n" style="width: 75%;">
                                                        <div dir="auto" class="css-901oao r-1dna1ie r-1b43r93">Cruise
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="css-1dbjc4n" style="margin-bottom: 10px; width: 50%;">
                                                <div class="css-1dbjc4n r-18u37iz r-1777fci r-13qz1uu">
                                                    <div class="css-1dbjc4n" style="width: 25%;">
                                                        <div data-focusable="true" tabindex="0"
                                                             class="css-1dbjc4n r-1awozwy r-1kihuf0 r-1loqt21 r-1777fci r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr"
                                                             style="border-color: rgb(43, 199, 201); border-radius: 8.5px; border-width: 2px; height: 17px; opacity: 1; width: 17px;"></div>
                                                    </div>
                                                    <div class="css-1dbjc4n" style="width: 75%;">
                                                        <div dir="auto" class="css-901oao r-1dna1ie r-1b43r93">Super
                                                            Bike
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="css-1dbjc4n">
                                            <div data-focusable="true" tabindex="0"
                                                 class="css-1dbjc4n r-1awozwy r-1jk19d6 r-1q9bdsx r-1loqt21 r-1777fci r-1otgn73 r-eafdt9 r-1i6wzkk r-lrvibr r-13qz1uu"
                                                 style="height: 48px; opacity: 1; transition: width 0.7s ease 0s, height 0.7s ease 0s;">
                                                <div dir="auto" class="css-901oao r-jwli3a"
                                                     style="font-size: 15px; text-align:center;     color:#fff;">Reset
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
            <div class="row">
                <style>

                    ul.lfthead {
                        padding-left: 15px;
                    }

                    ul.lfthead li {
                        font-size: 14px;
                        line-height: 28px;
                    }

                    span.btop img {
                        width: 70px;
                        position: absolute;
                    }


                    .SM_6aefeecf {
                        background-color: #1ca0a4;
                        color: #fff;
                        font-weight: 500;
                        line-height: 18px;
                        width: 100px;
                        text-align: center;
                        padding: 6px;
                        margin-top: 10px;
                        border-radius: 5px;
                    }

                    .SM_6aefeecf2 {
                        background-color: #1ca0a4;
                        color: #fff;
                        font-weight: 500;
                        line-height: 18px;
                        text-align: center;
                        padding: 6px;
                        border-radius: 5px;
                        margin-left: 15px;
                    }


                    .fitem {
                        padding-top: 30px;
                    }

                    .fitem2 span {
                        font-size: 12px;
                        padding-right: 10px;
                        float: right;
                    }

                    .fitem2 h3 {
                        padding-right: 10px;
                        float: right;
                    }

                    .fitem2 h5 {
                        padding-right: 10px;
                        float: right;
                        color: #000;
                        font-weight: 600;
                        padding-bottom: 10px;
                    }

                    .fitem2 h6 {
                        padding-right: 10px;
                        float: right;
                        padding-bottom: 10px;
                    }

                    .fitem2 p {
                        padding-right: 10px;
                        float: right;
                        color: #49a6ba;
                    }

                    .bbtn {
                        padding-top: 6px;
                    }

                    .bbtn p {
                        color: #ff0000;
                        font-size: 12px;
                    }
                </style>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="x_carbooking_right_section_wrapper float_left">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_car_book_tabs_content_main_wrapper">
                                    <div class="row">
                                        @if($Vehicle)
                                            @foreach($Vehicle as $key=>$data)
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="x_car_offer_main_boxes_wrapper ">
                                                        <div class="col-xl-12 ">
                                                            <div class="SM_6aefeecf">{{$data->category}}</div>
                                                            <div class="x_car_offer_heading ">
                                                                <h2>
                                                                    <a href="#">{{$data->name}}</a>
                                                                    <span class="btop">
                                                                <img
                                                                    src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/fa_62673a.png">
                                                            </span>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-6 col-6">
                                                                <ul class="lfthead">
                                                                    <li><i class="fa fa-user"></i>
                                                                        Transmission: {{$data->gears}} Gear
                                                                    </li>
                                                                    <li><i class="fa fa-user"></i>
                                                                        Power: {{$data->engine_cc}} cc
                                                                    </li>
                                                                    <li><i class="fa fa-user"></i> Top
                                                                        Speed: {{$data->top_speed}} km/h
                                                                    </li>
                                                                    <li><i class="fa fa-user"></i> Fuel
                                                                        Capacity: {{$data->fuel_capacity}} Liters
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-xl-6 col-6" style="padding:0;">
                                                                <div class="x_car_offer_img1">
                                                                    <img src="/images/{{$data->images}}"
                                                                         alt="{{$data->name}}" style="width:190px;"
                                                                         class="img-responsive">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row fitem">
                                                            <div class="col-xl-4 col-4">
                                                                <div class="SM_6aefeecf2"><span>8.3 </span></div>
                                                            </div>
                                                            <div class="col-xl-8 col-8 fitem2"><span>Lowest Price for 1 Day </span>
                                                                @foreach($data->locations as $location)
                                                                    <div class="x_car_offer_price_inner">

                                                                        <h3>₹{{$location->weekday_price}} </h3>

                                                                    </div>
                                                                    <h5>Pay Just {{$location->minimum_price}}</h5>
                                                                    @break
                                                                @endforeach
                                                                <h6><i>for Instant Booking Confirmation! </i></h6>
                                                                @if($data->inclusions)
                                                                    <p>🗸 {{$data->inclusions}} </p>
                                                                @endif
                                                                <p>🗸 {{$data->locations->count()}} Pickup Location
                                                                    Available </p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-12 bbtn">
                                                                <p class="text-center">Hurry! Only 3 Bikes Available at
                                                                    this
                                                                    Price!</p>
                                                                <div class="x_car_offer_bottom_btn text-center">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)"
                                                                               rentn-get-modal="true"
                                                                               onclick="get_modal('{{$data->id}}');">Select
                                                                                Location
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if($key==5)
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <img class="plp-value-prop-card"
                                                                 src="https://revvselfdrivecar.s3-us-west-2.amazonaws.com/Open/prop-cards/destkop/insurance.svg">
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12"><img class="plp-value-prop-card"
                                                                    src="https://revvselfdrivecar.s3-us-west-2.amazonaws.com/Open/prop-cards/destkop/no-loan.svg">
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
@endsection
<style>

    .boxb {
        border: 1px solid #f1f1f1;
        border-radius: 0px;
        margin-bottom: 10px;
    }

    .popcart a {
        background: #0e5152;
        padding: 8px 5px;
        border-radius: 20px;
        color: #fff;
    }

    .popcart {
        padding: 50px 0px;
    }

    .main {
        border-right: 1px solid #f1f1f1;
        padding: 10px;
        text-align: center;
        margin-top: 11px;
    }


    .main h5 {
        /* background: #49a6ba; */
        /* padding: 10px; */
        color: #49a6ba;
        font-weight: 600;
        /* border-bottom: 1px solid; */
        font-size: 26px;
        /* border-radius: 5px; */
    }

    .main p {
        font-size: 20px;
        color: #000;
        font-weight: 600;
        font-style: italic;
        padding-top: 0px;
    }

    .main span {
        font-size: 14px;
        color: #0e5152;
        font-weight: 600;
    }

    .main2 {
        border-right: 1px solid #f1f1f1;
        padding: 10px;
    }

    .main2 p {
        padding-bottom: 0px;
        padding-top: 3px;
    }

    .main2 span {
        border: 2px dotted #49a6ba;
        padding: 1px 8px;
    }

    .main2 h3 {
        font-weight: 600;

    }

    .nb__32ACd {
        position: relative;
    }

    .nb__32ACd .nb__1-zWq {
        position: absolute;
        top: -23px;
        z-index: 1;
        left: -7%;
        background-color: #d14f4f;
        color: #fff;
        font-size: 12px;
        height: 23px;
        width: 80px;
        border-radius: 12px;
        padding: 0px;
        text-align: center;
    }

    .nb__32ACd .nb__1-zWq img {
        height: 12px;
        width: 12px;
        margin-right: 5px;
    }

    .dotb {
        border: 2px dotted #49a6ba;
        margin-top: 10px;
    }

    .scrol {
        overflow-y: scroll;
        height: 300px;
    }
</style>
<div class="modal fade" id="bikeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalotp" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="">
            <div class="modal-header" style="border-bottom:none; ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="    padding: 0px 15px;"><span aria-hidden="true">&times;</span></button>
            </div>
        </div>
    </div>
    <div class="modal-body">
        <div class="container scrol">
            <div class="row boxb" rentn-modal="true">

            </div>
        </div>
    </div>
</div>

<script>

    (function ($) {

        $.fn.bootstrapNumber = function (options) {

            var settings = $.extend({
                upClass: 'default',
                downClass: 'default',
                upText: '+',
                downText: '-',
                center: true
            }, options);

            return this.each(function (e) {
                var self = $(this);
                var clone = self.clone(true, true);

                var min = self.attr('min');
                var max = self.attr('max');
                var step = parseInt(self.attr('step')) || 1;

                function setText(n) {
                    if (isNaN(n) || (min && n < min) || (max && n > max)) {
                        return false;
                    }

                    clone.focus().val(n);
                    clone.trigger('change');
                    return true;
                }

                var group = $("<div class='input-group'></div>");
                var down = $("<button type='button'>" + settings.downText + "</button>").attr('class', 'btn btn-' + settings.downClass).click(function () {
                    setText(parseInt(clone.val() || clone.attr('value')) - step);
                });
                var up = $("<button type='button'>" + settings.upText + "</button>").attr('class', 'btn btn-' + settings.upClass).click(function () {
                    setText(parseInt(clone.val() || clone.attr('value')) + step);
                });
                $("<span class='input-group-btn'></span>").append(down).appendTo(group);
                clone.appendTo(group);
                if (clone && settings.center) {
                    clone.css('text-align', 'center');
                }
                $("<span class='input-group-btn'></span>").append(up).appendTo(group);

                // remove spins from original
                clone.prop('type', 'text').keydown(function (e) {
                    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                        (e.keyCode == 65 && e.ctrlKey === true) ||
                        (e.keyCode >= 35 && e.keyCode <= 39)) {
                        return;
                    }
                    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                        e.preventDefault();
                    }

                    var c = String.fromCharCode(e.which);
                    var n = parseInt(clone.val() + c);

                    if ((min && n < min) || (max && n > max)) {
                        e.preventDefault();
                    }
                });

                self.replaceWith(group);
            });
        };
    }(jQuery));


</script>
<script>
    // Remember set you events before call bootstrapSwitch or they will fire after bootstrapSwitch's events
    $("[name='checkbox2']").change(function () {
        if (!confirm('Do you wanna cancel me!')) {
            this.checked = true;
        }
    });

    $('#after').bootstrapNumber();
    $('#after1').bootstrapNumber();
    $('#after2').bootstrapNumber();
    $('#after3').bootstrapNumber();
    $('#colorful').bootstrapNumber({
        upClass: 'success',
        downClass: 'danger'
    });
</script>

<script>
    function get_modal(id) {

        let url = $("#url").val();

        let site_url =  url+'/store/product-list-modal';
        $.ajax({
            url: site_url,
            method: 'post',
            data: {
                'vehicle_id': id
            },
            contentType: false,
            cache: false,
            processData: false,
            success: function (resp) {

            },
            error: function (res) {
                alert("Unexpected error! Try again.");
                // location.reload();
            }
        });
    }
</script>
