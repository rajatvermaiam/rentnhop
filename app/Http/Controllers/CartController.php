<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{


    public function add_cart(Request $request)
    {
        /**
         * data_reference_id sequence4
         * vehicle_id-locationPrice_id-user_id
         */

        $data = $request->all();
        $data = $data['data_reference_id'];

        $data = explode('-', $data);

        if (count($data) == 3) {

            $vehicle_id = $data[0];
            $price_id = $data[1];
            $vehicle = Vehicle::where('id', $vehicle_id)->first();
            $location_price = Price::where('id', $price_id)->first();

            $search_data = session()->get('search_data');

            $weekends = $search_data['weekends'];
            $weekdays = $search_data['weekdays'];
            $total_days = $weekends + $weekdays;

            $weekends_price = $weekends * $location_price->weekend_price;
            $weekdays_price = $weekdays * $location_price->weekday_price;

            $selling_price = $weekends_price + $weekdays_price;

            $security_price = $location_price->security_price;

            $cart_data = [
                'vehicle_id' => $vehicle->id,
                'qty' => 1,
                'image' => $vehicle->images,
                'name' => $vehicle->name,
                'selling_price' => $selling_price,
                'weekends_price' => $weekends_price,
                'weekdays_price' => $weekdays_price,
                'security_price' => $security_price,
                'search_data' => $search_data,
                'vehicle_data' => [
                    'vehicle_details' => $vehicle,
                    'location_price_data' => $location_price
                ],

            ];

            $found = false;

            $products = session()->pull('cartProducts', []);
            foreach ($products as $key => $product) {
                if ($product['vehicle_id'] == $cart_data['vehicle_id']) {
                    $products[$key]['qty'] = $cart_data['qty'] + $products[$key]['qty'];
                    $products[$key]['selling_price'] = $cart_data['selling_price'] + $products[$key]['selling_price'];
                    $products[$key]['weekends_price'] = $cart_data['weekends_price'] + $products[$key]['weekends_price'];
                    $products[$key]['weekdays_price'] = $cart_data['weekdays_price'] + $products[$key]['weekdays_price'];
                    $products[$key]['security_price'] = $cart_data['security_price'] + $products[$key]['security_price'];
                    $found = true;
                }
            }
            if (!$found) {
                array_push($products, $cart_data);
                session()->put('cartProducts', $products);
            } else {
                session()->put('cartProducts', $products);
            }
            $request->session()->save();

            $cartProducts = session('cartProducts');


            $header_cart_dropdown = View('front.header-cart-dropdown', compact('cartProducts'))->render();
            $message = [
                "StatusCode" => 0,
                "redirect_url" => url('cart/checkout'),
                "header_cart_count" => count($cartProducts),
                "header_cart_dropdown" => $header_cart_dropdown,
                "Message" => 'Vehicle Successfully added to cart',
                "Class" => "success_popup",
                "Reload" => "false",
            ];
            $availability=0;
            $availability = $availability+1;
            return response()->json($message)->withCallback($request->input('callback'));
        } else {
            $message = [
                "StatusCode" => 2,
                "Message" => 'Invalid cart data received',
                "Class" => "error_popup", "Reload" => "false",
                "OtpField" => "true",
            ];
            return response()->json($message)->withCallback($request->input('callback'));
        }

    }

    public function update_cart(Request $request)
    {
        $data = $request->all();
        $vehicle_id = $data['data_vehicle_id'];
        $new_qty = $data['qty'];
        $cartProducts = session()->pull('cartProducts', []);
        //$cartProducts = session('cartProducts');

        foreach ($cartProducts as $key => $product) {
            if ($product['vehicle_id'] == $vehicle_id) {

                $cartProducts[$key]['qty'] = $new_qty;
                $search_data = $product['search_data'];
                $weekends = $search_data['weekends'];
                $weekdays = $search_data['weekdays'];

                $weekends_price = $weekends * $product['vehicle_data']['location_price_data']['weekend_price'];
                $weekdays_price = $weekdays * $product['vehicle_data']['location_price_data']['weekday_price'];

                $selling_price = $weekends_price + $weekdays_price;

                $cartProducts[$key]['selling_price'] = $selling_price*$new_qty;
                $cartProducts[$key]['weekends_price'] = $product['vehicle_data']['location_price_data']['weekend_price']*$new_qty;
                $cartProducts[$key]['weekdays_price'] = $product['vehicle_data']['location_price_data']['weekday_price']*$new_qty;
                $cartProducts[$key]['security_price'] = $product['vehicle_data']['location_price_data']['security_price']*$new_qty;


            }

        }

        session()->put('cartProducts', $cartProducts);

        $message = [
            "StatusCode" => 0,
            "header_cart_count" => count($cartProducts),
            "Message" => 'cart successfully updated',
            "Class" => "success_popup",
            "Reload" => "false",
        ];
        return response()->json($message)->withCallback($request->input('callback'));

    }


    public function deleteItem(Request $request)
    {
        $data = $request->all();
        $id = $data['data_reference_id'];
        $products = session()->pull('cartProducts', []);

        unset($products[$id]);

        session()->put('cartProducts', $products);

        $cartProducts = session('cartProducts');
        $header_cart_dropdown = View('front.header-cart-dropdown', compact('cartProducts'))->render();
        $message = [
            "StatusCode" => 0,
            "header_cart_count" => count($cartProducts),
            "header_cart_dropdown" => $header_cart_dropdown,
            "Message" => 'vehicle successfully removed from cart',
            "Class" => "success_popup",
            "Reload" => "false",
        ];
        return response()->json($message)->withCallback($request->input('callback'));
    }

    public function checkout(Request $request)
    {

        //$request->session()->forget('cartProducts');
        $cartProducts = session('cartProducts');
        //prd($cartProducts);
        $price_breakup = null;
        if ($cartProducts) {
            $selling_price = 0;
            $weekends_price = 0;
            $weekdays_price = 0;
            $security_price = 0;
            foreach ($cartProducts as $cartProduct) {
                $selling_price += $cartProduct['selling_price'];
                $weekends_price += $cartProduct['weekends_price'];
                $weekdays_price += $cartProduct['weekdays_price'];
                $security_price += $cartProduct['security_price'];
            }

            $partially_amount = $selling_price * 20 / 100;
            $remaining_amount = $selling_price - $partially_amount;

            $price_breakup = [
                'partially_amount' => $partially_amount,
                'remaining_amount' => $remaining_amount,
                'selling_price' => $selling_price,
                'weekends_price' => $weekends_price,
                'weekdays_price' => $weekdays_price,
                'security_price' => $security_price
            ];
            session()->put('price_breakup', $price_breakup);
        }

        return view('front.checkout-page', compact('price_breakup', 'price_breakup'));
    }
}
