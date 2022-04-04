<?php

namespace App\Http\Controllers;


use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;
use Session;
use Exception;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $q = rent_decode($request->input('q'));

        if ($q) {
            $q = explode('#', $q);
        }

        if ($q[0] == 'developer@rentnhop') {

            $booking_id = $q[1];

            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $price_breakup = session('price_breakup');
            $tnx_amount = round($price_breakup['partially_amount']);
            $order_txn = md5(round(floor(rand() * 10000)));
            $tnx_amount = $tnx_amount * 100;
            $postdata = array(
                "amount" => $tnx_amount,
                "currency" => "INR",
                "receipt" => "rcptid_" . $order_txn,
                "payment_capture" => 1,
            );

            $return_data = $api->order->create($postdata);

            $booking_data = Booking::where('id',$booking_id)->first();


            $user = Auth::user();

            $user_id=null;
            if($user){
                $user_id = $user->id;
            }

            $udf1 = null;
            $udf2 = $booking_id;
            $udf3 = null;
            $udf4 = null;
            $razor_details = [
                'ID' => $return_data['id'],
                "ORDER_ID" => $order_txn,
                "customer_id" => $user_id,
                "name" => $booking_data->name,
                "email" => $booking_data->email,
                "contact" => $booking_data->mobile,
                "extraparmeter" => $udf1 . "#" . $udf2 . "#" . $tnx_amount . "#" . $return_data['id'] . "#" . $udf3 . "#" . $udf4 . "#" . $user_id,
                "key" => env('RAZORPAY_KEY'),
                "amount" => $tnx_amount,

            ];

            return view('front.razorpay', compact('razor_details'));
        }
    }

    public function payment_status(Request $request)
    {

        $input = $request->all();
        if (empty($input['razorpay_payment_id']) === false) {

            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

            $apidata = $api->payment->fetch($input['razorpay_payment_id']);

            $payment_status = "Success";
            try {
                $attributes = array(
                    'razorpay_order_id' => $input['razorpay_order_id'],
                    'razorpay_payment_id' => $input['razorpay_payment_id'],
                    'razorpay_signature' => $input['razorpay_signature']
                );

                $api->utility->verifyPaymentSignature($attributes);
            } catch (SignatureVerificationError $e) {
                $payment_status = "Failed";
                $error = 'Razorpay Error : ' . $e->getMessage();
            }

            $response = array(
                'id' => $apidata['id'],
                'entity' => $apidata['entity'],
                'amount' => $apidata['amount'],
                'currency' => $apidata['currency'],
                'status' => $apidata['status'],
                'order_id' => $apidata['order_id'],
                'invoice_id' => $apidata['invoice_id'],
                'international' => $apidata['international'],
                'method' => $apidata['method'],
                'amount_refunded' => $apidata['amount_refunded'],
                'refund_status' => $apidata['refund_status'],
                'captured' => $apidata['captured'],
                'description' => $apidata['description'],
                'card_id' => $apidata['card_id'],
                'bank' => $apidata['bank'],
                'wallet' => $apidata['wallet'],
                'vpa' => $apidata['vpa'],
                'email' => $apidata['email'],
                'contact' => $apidata['contact'],
                'extraparmeter' => $apidata['notes']['extraparmeter'],
                'fee' => $apidata['fee'],
                'tax' => $apidata['tax'],
                'error_code' => $apidata['error_code'],
                'error_description' => $apidata['error_description'],
                'error_source' => $apidata['error_source'],
                'error_step' => $apidata['error_step'],
                'error_reason' => $apidata['error_reason'],

                'created_at' => $apidata['created_at']
            );

            $udfdata = explode("#", $apidata['notes']['extraparmeter']);

            $booking_id = $udfdata[1];


            if ($payment_status == "Success") {

                /*bike availability code here*/

                $data = [
                    'payment_status'=>$payment_status,
                    'booking_status'=>'Success',
                    'razorpay_response'=> json_encode($response)
                ];

                $booking_data = Booking::where('id',$booking_id);

                $booking_id = rent_encode($booking_id);


                $booking_data->update($data);

                $request->session()->put('booking_id', $booking_id);

               // return redirect()->url('store/voucher');

                return redirect('store/voucher');
            } else {
                echo 'Payment Failed';
            }
        }else{
            echo 'Payment Failed';
        }
    }
}
