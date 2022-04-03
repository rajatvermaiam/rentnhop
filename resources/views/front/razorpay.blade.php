@extends('front.layout')
@section('content')
<script type="text/javascript">
    window.onload = function(){
        document.forms['pacpayment'].submit()
    }
</script>

<main class="container ptb30 plr0 pt15m" style="padding-top: 30px;">
    <div class="row m0 text-center">
        <div class="col-12">
            <img src="<?php echo asset('front/img/lg-spinner.gif'); ?>" alt='{{ ucfirst('rentnhop') }}' />
            <h1>Please Wait Loading...</h1>
            <p class="text-danger">Please Do Not Close Or Refresh This Window</p>
        </div>
    </div>

    <form method="POST" name="pacpayment"  action="https://api.razorpay.com/v1/checkout/embedded">
        <input type="hidden" name="key_id" value="{{ $razor_details['key'] }}">
        <input type="hidden" name="order_id" value="{{ $razor_details['ID'] }}">
        <input type="hidden" name="name" value="{{ ucfirst('rentnhop') }}">
        <input type="hidden" name="description" value="">
        <input type="hidden" name="notes[customer_id]" value="{{$razor_details['customer_id']}}">
        <input type="hidden" name="notes[extraparmeter]" value="{{ $razor_details['extraparmeter'] }}">
        <input type="hidden" name="extraparmeter" value="{{ $razor_details['extraparmeter'] }}">
        <input type="hidden" name="image" value="{{asset('front/img/logo.png')}}">
        <input type="hidden" name="prefill[name]" value="{{ $razor_details['name'] }}">
        <input type="hidden" name="prefill[contact]" value="{{ $razor_details['contact'] }}">
        <input type="hidden" name="prefill[email]" value="{{ $razor_details['email'] }}">
        <input type="hidden" name="callback_url" value="{{ url('payment/payment-status') }}">
        <!-- <input type="hidden" name="cancel_url" value="https://example.com/payment-cancel"> -->
    </form>
</main>

@endsection
