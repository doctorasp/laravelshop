<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Goods;
use Illuminate\Support\Facades\Storage;

class CategoriesController extends Controller
{
    public function categoryAction($id){

        $category = Categories::find($id);
        if($category){
            $path = Storage::url('apple/apple.jpg');
            $goods = Goods::where('category_id', $id)->get();
            return view('goods', ['goods'=>$goods, 'path'=>$path]);
        }
    }

    public function nameAction($latin_url){

        $category = Categories::where('latin_url', $latin_url)->first();
        if($category){
            $path = Storage::url('apple/apple.jpg');
            $goods = Goods::where('category_id', $category->id)->get();
            return view('goods', ['goods'=>$goods, 'path'=>$path]);
        }
    }
}
