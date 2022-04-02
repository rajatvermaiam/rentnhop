@if($cartProducts)
    @foreach($cartProducts as $key=>$data)

    <div class="cc_cart_wrapper1  @if($key!=0) {{ 'cc_cart_wrapper2' }} @endif">
        <div class="cc_cart_img_wrapper">
            <img src="/images/{{ $data['image'] }}" height="100" width="100"
                 alt="cart_img"/></div>
        <div class="cc_cart_cont_wrapper">
            <h4><a>{{ $data['name'] }}</a></h4>
            <p>Quantity : {{ $data['qty'] }} × ${{ ($data['selling_price'])/($data['qty']) }}</p>
            <h5>${{ $data['selling_price'] }}</h5>
            @if( $data['vehicle_id'])
                <button type="button" class="close" rent-cart-common="true" data-method="POST"
                        data-href="{{ url('cart/cart-delete-item') }}"
                        data-reference-id="{{ $key }}">&times;
                </button>
            @endif
        </div>
    </div>
    @endforeach
    <div class="cc_cart_wrapper1 cc_cart_wrapper2">
        <div class="checkout_btn_resto"><a href="car_checkout.html">Checkout</a></div>
    </div>
@endif
