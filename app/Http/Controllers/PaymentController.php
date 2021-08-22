<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class PaymentController extends Controller
{
    //
    public function index(Request $request, $id) {

        $order = Order::find($id);

        return view("payment.pay", ['order' => $order]);
    }

    public function verify(Request $request, $id) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$request->transaction_id}/verify",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer FLWSECK-761386b08bdf01ab5cdb56e4a3c035a8-X"
          ),
        ));

        $response = curl_exec($curl);

        if($response){
            Order::where('id',$id)->update(['status' => 'approved']);
        }

        curl_close($curl);
        $res = json_decode($response);
        return [$res];
    }
}
