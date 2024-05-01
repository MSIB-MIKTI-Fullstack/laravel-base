<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
      $carts = Cart::getCartByUser()
      ->get();
      return view('costumers.cart', compact('carts'));   
    }

    public function changeChart(Request $request){
      $cart = Cart::find($request->id);
      try {
        $cart->update([
          'qty' => $request->qty,
        ]);
        return response()->json(['message' => 'Success change cart'], 200);
      } catch (\Throwable $th) {
        return response()->json(['message' => $th->getMessage()], 500);
      }
    }
    public function getTotalCart(){
      $cart = Cart::getCartByUser()->get();
      $total = 0;
      foreach ($cart as $key => $item) {
        $total += $item->total_qty * $item->price;
      }
      return response()->json(['total' => $total], 200);
    }
    public function getCart() {
      $carts = Cart::getCartByUser()
      ->get();
      return response()->json(['data' => $carts], 200);
    }
    public function deleteCart(Request $request) {
     try {
      Cart::find($request->id)->delete();
      return response()->json(['message' => 'Success delete cart'], 200);
     } catch (\Throwable $th) {
      return response()->json(['message' => $th->getMessage()], 500);
     }
    }
}
