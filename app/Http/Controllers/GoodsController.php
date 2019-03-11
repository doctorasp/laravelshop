<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GoodsController extends Controller
{
    public function showAction($id){
        $product = Goods::find($id);
        if($product){
            $path = Storage::url('apple/apple.jpg');
            return view('product', ['good'=>$product, 'path'=>$path]);
        }
    }

    public function allGoods(){
        $goods = Goods::all();
        if($goods){
            $path = Storage::url('apple/apple.jpg');
            return view('goods', ['goods'=>$goods, 'path'=>$path]);
        }
    }
}
