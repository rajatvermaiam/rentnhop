
<script type="text/javascript">
    window.onload = function(){
        document.forms['pacpayment'].submit()
    }
</script>

<main class="container ptb30 plr0 pt15m">
    <div class="row m0 text-center">
        <div class="col-12">
            <img src="<?php echo base_url('images/lg-spinner.gif'); ?>" alt='<?php echo  ucfirst('rentnhop');?>' />
            <h1>Please Wait Loading...</h1>
            <p class="text-danger">Please Do Not Close Or Refresh This Window</p>
        </div>
    </div>

    <form method="POST" name="pacpayment"  action="https://api.razorpay.com/v1/checkout/embedded">
        <input type="hidden" name="key_id" value="<?php echo $Paytm_details['key'];?>">
        <input type="hidden" name="order_id" value="<?php echo $Paytm_details['ID'];?>">
        <input type="hidden" name="name" value="<?php echo  ucfirst('rentnhop');?>">
        <input type="hidden" name="description" value="">
        <input type="hidden" name="notes[customer_id]" value="<?php echo $Paytm_details['customer_id'];?>">
        <input type="hidden" name="notes[extraparmeter]" value="<?php echo $Paytm_details['extraparmeter'];?>">
        <input type="hidden" name="extraparmeter" value="<?php echo $Paytm_details['extraparmeter'];?>">
        <input type="hidden" name="image" value="https://www.rentnhop.com/images/logo.png">
        <input type="hidden" name="prefill[name]" value="<?php echo $Paytm_details['name'];?>">
        <input type="hidden" name="prefill[contact]" value="<?php echo $Paytm_details['contact'];?>">
        <input type="hidden" name="prefill[email]" value="<?php echo $Paytm_details['email'];?>">
        <input type="hidden" name="callback_url" value="<?php  echo base_url('payment/payment-status');?>">
        <!-- <input type="hidden" name="cancel_url" value="https://example.com/payment-cancel"> -->
    </form>
</main>
