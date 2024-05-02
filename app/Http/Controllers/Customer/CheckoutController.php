<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('customers.checkout');
    }

    public function checkout(Request $request)
    {
        try {


            Transaction::create([
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
            ]);


        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
