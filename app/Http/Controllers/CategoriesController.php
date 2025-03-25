<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Filter;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
//    public function index($hash, Request $request){
////        dd($request);
//        $data['category'] = Category::where('hash', $hash)->first();
//        if(!empty($request->price_from)){
//            $data['products'] = Product::where('categories_id', $data['category']->id)
//                ->where('price', '>=', $request->price_from)
//                ->where('price', '<=', $request->price_to)
//                ->whereHas('filters', function($q){
//                     return $q->where('filter_id', 1);
//                })
//                ->paginate(2)->withQueryString();
//            $data['price_from'] = $request->price_from;
//            $data['price_to'] = $request->price_to;
//        }else{
//            $data['products'] = Product::where('categories_id', $data['category']->id)
//                ->paginate(2)->withQueryString();//  4 товара - сохранение фильтра в адресной строке
//        }
//
//        $data['filters'] = Filter::with('group')->get()->groupBy('group.title');
//
//        return view('pages/category', compact('data'));
//    }
    public function index($hash, Request $request){
//        dd($request);



        $data['category'] = Category::where('hash', $hash)->first();
        $data['select_filters'] = [];

        $data['products'] = Product::where('categories_id', $data['category']->id)
                ->when($request->price_from, function ($q, $price_from) {
                $q->where('price', '>=', $price_from);
                })
                ->when($request->price_to, function ($q, $price_to) {
                    $q->where('price', '<=', $price_to);
                });


        if(!empty($request->filters)) {
            foreach ($request->filters as $key => $value) {
                $data['select_filters'][] = $key;
            }
            $data['products']->whereHas('filters', function ($q) use ($data) {
                return $q->whereIn('filter_id', $data['select_filters']);
            });
        }

        $data['products'] = $data['products']->paginate(2)->withQueryString();
        $data['price_from'] = $request->price_from;
        $data['price_to'] = $request->price_to;


        $data['filters'] = Filter::with('group')->get()->groupBy('group.title');

        return view('pages/category', compact('data'));
    }
}
