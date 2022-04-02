<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $order_txn = md5(round(floor(rand() * 10000)));
        $tnx_amount=1 * 100;
        $postdata = array(

            "amount" => $tnx_amount,
            "currency" => "INR",
            "receipt" => "rcptid_" . $order_txn,
            "payment_capture" => 1,
        );

        $return_data = $api->order->create($postdata);

        $Razor_details = array(

            'ID' => $return_data['id'],
            "ORDER_ID" => $order_txn,
            "customer_id" => $customer_id,
            "name" => $firstname . " " . $lastname,
            "email" => $email,
            "contact" => $phone,
            "extraparmeter" => $udf1 . "#" . $udf2 . "#" . $tnx_amount . "#" . $return_data['id'] . "#" . $udf3 . "#" . $udf4 . "#" . $customer_id,
            "key" => env('RAZORPAY_KEY'),
            "amount" => $tnx_amount,

        );

        return view('front.index', compact('cities', 'coupon'));
    }

    public function payment_status(Request $request){

        $input = $request->all();

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount'=>$payment['amount']));

            } catch (Exception $e) {
                return  $e->getMessage();
                Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        Session::put('success', 'Payment successful');
        return redirect()->back();

    }
}
