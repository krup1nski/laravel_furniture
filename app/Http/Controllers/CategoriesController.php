<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Filter;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($hash, Request $request){
        $data['category'] = Category::where('hash', $hash)->first();
        if(!empty($request->price_from)){
            $data['products'] = Product::where('categories_id', $data['category']->id)
                ->where('price', '>=', $request->price_from)
                ->where('price', '<=', $request->price_to)
                ->get();
            $data['price_from'] = $request->price_from;
            $data['price_to'] = $request->price_to;
        }else{
            $data['products'] = Product::where('categories_id', $data['category']->id)
                ->paginate(4)->withQueryString();//  4 товара - сохранение фильтра в адресной строке
        }

        $data['filters'] = Filter::with('group')->get()->groupBy('group.title');

        return view('pages/category', compact('data'));
    }
}
