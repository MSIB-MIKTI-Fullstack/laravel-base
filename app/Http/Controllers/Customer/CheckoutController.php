<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\DetailTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('customers/checkout');
    }

    public function process(Request $request){
        $cart = Cart::getTotalCheckoutByUser()->first();
        try {
            $transaction = Transaction::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'country' => $request->country,
                'zip_code' => $request->zip_code,
                'email_address' => $request->email_address,
                'phone_number' => $request->phone_number,
                'total_checkout' => $request->total_checkout,
                'status' => "pending",
                'total_checkout' => $cart->total_checkout,
            ]);

            $cart = Cart::getCartByUser()->get();

            foreach ($cart as $key => $item){
                DetailTransaction::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $item->product_id,
                    'user_id' => $item->user_id,
                ]);

                $item->delete();
            }
            return redirect()->route('customer.products');
            //response()->json(['message' => 'Success change cart quantity'], 200);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th->getMessage());
            //return response()->json(['message' => $th->getMessage()], 500);
        }
    }

    public function getProvince(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: " . env('API_KEY_RAJAONGKIR')
            ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);

        if ($err) {
            return response()->json(['message' => $err], 500);
        } else {
            return response()->json(json_decode($response), 200);
        }
    }

    public function getCity(Request $request){
        $curl = curl_init();
        $province_id = $request->province_id;
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province={$province_id}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: " . env('API_KEY_RAJAONGKIR')
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return response()->json(['message' => $err], 500);
        } else {
            return response()->json(json_decode($response), 200);
        }
    }
}
