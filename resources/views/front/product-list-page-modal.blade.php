<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="">
        <div class="modal-header" style="border-bottom:none; ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="    padding: 0px 15px;">
                <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <div class="container scrol">
                @if($vehicle->prices && $vehicle->prices->count()!=0)
                    @foreach($vehicle->prices as $data)
                        <div class="row boxb">
                            <div class="col-md-6  text-center loc">
                                <div class="main2">
                                    <h3>{{$data->locality_name}}</h3>
                                    <p>Mon-Thur - ₹{{$data->weekday_price}} | Fri-Sun - ₹{{$data->weekend_price}} </p>
                                    <p style="padding-bottom:10px;"> Security Deposit - ₹{{$data->security_price}}</p>
                                    <span>Extra 20% off, Use Coupon : KAROL20</span></div>
                            </div>
                            <div class="col-md-4">
                                <div class="main">
                                    <h5>₹ {{$data->weekday_price}}</h5>
                                    <div class="dotb">
                                        <p>Pay Just ₹553</p>
                                        <span>Remaining at the time of Pickup</span></div>
                                </div>
                            </div>
                            <div class="col-md-2 col-12 popcart">
                                <div class="nb__32ACd">
                                    <p class="flex items-center nb__1-zWq">
                                        <img src="https://assets.nobroker.in/nb-new/public/Property-Details/verifiedAvailabilityTick.svg"
                                            alt="verified"><span>{{$data->quantity}} Left</span></p>
                                    <a rent-cart-common="true" data-method="POST" data-href="{{ url('cart/add-cart') }}" data-reference-id="{{$vehicle->id.'-'.$data->id.'-'.$data->user_id }}" class="admb" style="    background: #49a6ba;
    color: #fff;
    border-radius: 20px;
    font-size: 16px;
    padding: 15px 18px;
    font-weight: 300;"> <strong> Add to Cart </strong></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row boxb">
                        <div class="col-md-6  text-center loc">
                            <p>No Data Available</p>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>
