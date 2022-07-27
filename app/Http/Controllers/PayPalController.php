<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Srmklive\PayPal\Facades\PayPal;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class PayPalController extends Controller
{


    public function create(Request $request) {

        $data = json_decode($request->getContent(), true);

        //$provider = new PayPalClient;
        //iniciamos paypal

        $provider = PayPal::setProvider();
        $provider->setApiCredentials(config('paypal'));
        $token = $provider->getAccessToken();
        $provider->setAccessToken($token);

        $price = Order::getProductPrice($data['value']);
        $description = Order::getProductDescription($data['value']);


        $order = $provider->createOrder([
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $price
                    ],
                    "description" => $description
                ]
            ]
                ]);

            Order::create([
                'price' => $price,
                'description' => $description,
                'status' => $order['status'],
                'reference_number' => $order['id']
            ]);

        return response()->json($order);
    }

    public function capture(Request $request) {

       $this->guard();



        // $data = json_decode($request->getContent(), true);

        // $orderId = $data['orderId'];
        // //$provider = new PayPalClient;
        // //iniciamos paypal

        // $provider = PayPal::setProvider();
        // $provider->setApiCredentials(config('paypal'));
        // $token = $provider->getAccessToken();
        // $provider->setAccessToken($token);

        // $result = $provider->capturePaymentOrder($orderId);

        // if($result['status'] == "COMPLETED") {
        //     DB::table('orders')
        //     ->where('reference_number', $result['id'])
        //     ->update(['status' => 'COMPLETED', 'updated_at' => \Carbon\Carbon::now()]);
        // }

        return response()->json($this);
    }
}
