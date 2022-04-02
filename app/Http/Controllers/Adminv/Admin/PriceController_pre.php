<?php


namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
        header("Pragma: no-cache"); // HTTP 1.0.
        header("Expires: 0 ");

        $cartProducts = session('cartProducts');
        return view('cart', compact('cartProducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://technet.rapaport.com/HTTP/JSON/RetailFeed/GetSingleDiamond.aspx",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{'request': {'header': {'username': 'qdbdnqadbx6bzgbaz6fpxe8xdiqigp', 'password': 'RymHpjqT'}, 'body': {'diamond_id': $request->product_id }}}",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "Cookie: ASP.NET_SessionId=52ppz1o12zoph5jh421mrk4y"
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        $response = $response->response->body;

        $request['product'] = $response->diamond;
        $request['seller'] = $response->seller;

        $data = $request->only('product_id', 'qty', 'product', 'seller', 'product_image');
        $found = false;

        $products = session()->pull('cartProducts', []);
        foreach ($products as $key => $product) {
            if ($product['product_id'] == $request['product_id']) {
                $products[$key]['qty'] = $request['qty'] + $products[$key]['qty'];
                $found = true;
            }
        }
        if (!$found) {
            array_push($products, $data);
            session()->put('cartProducts', $products);
        } else {
            session()->put('cartProducts', $products);
        }
        $request->session()->save();
        $cartProducts = session('cartProducts');

        return redirect()->back()->with('success', 'Product added in cart !');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = session()->pull('cartProducts', []);
        foreach ($products as $key => $product) {
            $products[$key]['qty'] = $request[$key];
        }
        session()->put('cartProducts', $products);

        return redirect()->route('cart.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $request->session()->forget('cartProducts');
        return redirect()->to('/');
    }

    public function deleteItem($id, Request $request)
    {
        $products = session()->pull('cartProducts', []);
        unset($products[$id]);
//        dd($products);
        session()->put('cartProducts', $products);

        return redirect()->route('cart.index');
    }

    public function checkout()
    {
        $cartProducts = session('cartProducts');
        if (empty($cartProducts))
            return redirect()->back();
        return view('checkout', compact('cartProducts'));
    }

    public function postCheckout(Request $request)
    {

        $cartProducts = session('cartProducts');

        if ($cartProducts) {
            $subtotal = 0;
            foreach ($cartProducts as $cartProduct) {
                $subtotal += $cartProduct['product']->total_sales_price_in_currency * $cartProduct['qty'];
            }
            $request['total'] = $subtotal + 15;
            $order = Order::create($request->except('shipping_method', 'terms_and_conditions'));

            foreach ($cartProducts as $key => $cartProduct) {
                $orderProudct = new OrderProduct();
                $orderProudct->order_id = $order->id;
                $orderProudct->product_id = $cartProduct['product_id'];
                $orderProudct->quantity = $cartProduct['qty'];
                $orderProudct->seller_detail = json_encode($cartProducts[$key]['seller']);
                $orderProudct->price = $cartProduct['product']->total_sales_price_in_currency * $cartProduct['qty'];
                $orderProudct->save();
            }
            $request->session()->forget('cartProducts');

            return view('common.thankyou', compact('order'));
        } else {
            print "invalid action";
        }
    }

    public function postEnquiry(Request $request)
    {
        Inquiry::create($request->all());
        return view('common.inquiry-thank');
    }
}
