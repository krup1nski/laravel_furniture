<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends MainController
{
    public function index(){
        return view('pages/cart');
    }
    public function thanks(){
        return view('pages/thanks');
    }

    public function order(Request $request){
        $order = Order::create([
            'fio'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'comment'=>$request->comment,
            'price'=>123,
        ]);

        foreach ($request->cart as $cart){
            $price = Product::find($cart['product_id'])->price;
            OrderProduct::create([
                'product_id' => $cart['product_id'],
                'order_id' => $order->id,
                'count' => $cart['count'],
                'price' => $price,
            ]);
        }

        return $order;
    }

}
