<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Delivery;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderProductAccessory;
use App\Models\OrderProductOption;
use App\Models\Product;
use App\Models\PromoCode;
use Illuminate\Http\Request;

class CartController extends MainController
{
    public function index(){
        $this->data['deliveries'] = Delivery::all();
        return view('pages/cart', $this->data);
    }
    public function thanks(Request $request){
        return view('pages/thanks');
    }

    public function order(OrderRequest $request){


        $cart = json_decode($request->cart);

        $total = 0;
        foreach ($cart as $c) {
            $total += $c->product_price * $c->count;
        }


        $order = Order::create([
            'fio'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'delivery_type'=>$request->delivery,
            'comment'=>$request->comment,
            'price'=>$total,

        ]);
        $order_id = $order->id;

        foreach ($cart as $c){
            $product = Product::find($c->product_id);

            $order_product = OrderProduct::create([
                'product_id' => $c->product_id,
                'order_id' => $order->id,
                'count' => $c->count,
                'price' => $product['price'],
            ]);

            if(!empty($c->accessories)){
                foreach ($c->accessories as $accessory){
                    OrderProductAccessory::create([
                        'order_id' => $order['id'],
                        'product_id' => $product->id,
                        'accessory_id' => $accessory->id,

                    ]);
                }
            }
            if(!empty($c->product_options)){
                foreach ($c->product_options as $option){
                    OrderProductOption::create([
                        'order_id' => $order['id'],
                        'product_id' => $product->id,
                        'option_id' => $option->option_id,
                    ]);
                }
            }

        }

        return redirect()->route('thanks')->with([
            'cart' => $cart,
            'order_id' => $order_id
        ]);

    }

    public function promoCode(Request $request){
        $promo = PromoCode::where('code', $request->post('code'))->first();
        if(!empty($promo)){
            return ['ok', $promo->discount];
        }else{
            return ['error'];
        }
        return $request;
    }

}
