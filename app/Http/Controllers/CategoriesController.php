<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Filter;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends MainController
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
        $data['order_by'] = $request->get('order_by');
        $data['price_from'] = $request->price_from;
        $data['price_to'] = $request->price_to;

        // price от и до
        $products = Product::with('filters')->where('categories_id', $data['category']->id)
                ->when($request->price_from, function ($q, $price_from) {
                $q->where('price', '>=', $price_from);
                })
                ->when($request->price_to, function ($q, $price_to) {
                    $q->where('price', '<=', $price_to);
                });

        // фильтры если выбраны
        if(!empty($request->filters)) {
            foreach ($request->filters as $key => $value) {
                $data['select_filters'][] = $key;
            }
            $products->whereHas('filters', function ($q) use ($data) {
                return $q->whereIn('filter_id', $data['select_filters']);
            });
        }

        //сортировка по убыв и возр
        if($request->get('order_by') == 'price_increase'){
            $products->orderBy('price', 'asc');
        }else if($request->get('order_by') == 'price_decrease'){
            $products->orderBy('price', 'desc');
        }

        $prod_ids = Product::with('filters')->where('categories_id', $data['category']->id)->select('id')->get();

        $data['products'] =  $products->paginate(4)->withQueryString();

        $filters = [];
        foreach ($prod_ids as $prod) {
            foreach ($prod->filters as $f) {
                if(!in_array($f->id, $filters)){
                    $filters[] = $f->id;
                }
            };
        }


        $data['filters'] = Filter::with('group')->whereIn('id', $filters)->get()->groupBy('group.title');

        return view('pages/category', compact('data'));
    }
}
