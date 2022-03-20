@extends('front.layout')
@section('content')
<div class="x_car_book_sider_main_Wrapper float_left" style="padding-top:40px;">
    <div class="container">
        <div class="row">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="x_carbooking_right_section_wrapper float_left">
                    <div class="row">

                        <div class="col-xl-9 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="x_carbook_right_select_box_wrapper float_left">
                                <select class="myselect">
                                    <option>Location</option>
                                    <option>Karol Bagh S</option>
                                    <option>INA Metro Station</option>
                                    <option>Karol Bagh J</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="x_carbook_right_select_box_wrapper float_right">
                                <select class="myselect">
                                    <option>Sort By Price</option>
                                    <option>Popularity</option>
                                    <option>Best Discount</option>
                                    <option>Price: Hight to Low</option>
                                    <option>Price: Low to Hight</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="x_car_book_tabs_content_main_wrapper">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane active">
                                        <div class="row">
                                            @foreach($Vehicle as $key=>$data)
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="x_car_offer_main_boxes_wrapper float_left">
                                                    <div class="x_car_offer_heading float_left">
                                                        <h2><a href="#">{{$data->name}}</a></h2>

                                                    </div>
                                                    <div class="x_car_offer_img float_left"> <img src="/images/{{$data->images}}" alt="{{$data->name}}"> </div>
                                                    <div class="x_car_offer_price float_left">
                                                        <div class="x_car_offer_price_inner">
                                                            <!--<h6><i class="fa fa-tag"></i> &nbsp;15% off Deal</h6>-->
                                                            <h3>From ₹ 7500/day</h3>
                                                            <!-- <p><span>from</span> <br>
                                                               / day</p>-->
                                                        </div>
                                                    </div>

                                                    <div class="x_car_offer_heading float_left">
                                                        <ul>
                                                            <li> <a href="#">{{$data->engine_cc}}cc </a> </li>
                                                            <li> <a href="#"> {{$data->gears}} gear</a> </li>
                                                            <li>
                                                                <div class="nice-select" tabindex="0"> <span class="current"> Location &nbsp; </span>
                                                                    <ul class="list">
                                                                        <li class="dpopy_li"><a href="#"> Karol Bagh S : &nbsp;<b>2</b> </a> </li>
                                                                        <li class="dpopy_li"><a href="#"> INA Metro Station : &nbsp;<b>3</b></a> </li>
                                                                        <li class="dpopy_li"><a href="#"> Janakpuri East : &nbsp;<b>4</b></a> </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="x_car_offer_bottom_btn text-center">
                                                        <ul>
                                                            <li><a href="#">Book now</a> </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                            @if($key==3)
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img class="plp-value-prop-card" src="https://revvselfdrivecar.s3-us-west-2.amazonaws.com/Open/prop-cards/destkop/insurance.svg">
                                                    </div>
                                                </div>
                                            @endif

                                            @endforeach

                                        </div>



                                        <div class="row">
                                            <div class="col-md-12">
                                                <img class="plp-value-prop-card" src="https://revvselfdrivecar.s3-us-west-2.amazonaws.com/Open/prop-cards/destkop/no-loan.svg">
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
@endsection
