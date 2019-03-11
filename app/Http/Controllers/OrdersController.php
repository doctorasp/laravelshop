<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function buyAction($id){
        $product = Goods::find($id);
        if($product){
            return view('order', ['goods_id'=>$id]);
        }
    }

    public function order_final(Request $request){
        $order = new Orders();
        $order->customer_name = $request->customer_name;
        $order->city_id = 4;
        $order->phone = $request->phone;
        $order->comment = $request->comment;

        $order->save();

        return redirect('/');
    }
}
