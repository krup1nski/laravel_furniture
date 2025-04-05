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
        // Получаем категорию
        $data['category'] = Category::where('hash', $hash)->firstOrFail();
        $this->data['page_title'] = $data['category']->title;
        $this->data['page_description'] = 'Categories';

        //bradcrumbs с подкатегориями
        $this->data['bradcrumbs'] = [
            [
                'is_home'=>true,
                'title'=>'Главная',
                'href'=>'/'

            ]
        ];
        if(empty($data['category']->top)){
            $this->data['bradcrumbs'][] = [
                'is_home'=>false,
                'title'=>$data['category']->title,
                'href'=>route('category',$data['category']->hash),
            ];
        }else{
            $cat_top = Category::where('id', $data['category']->top)->first();
            $this->data['bradcrumbs'][] = [
                'is_home'=>false,
                'title'=>$cat_top->title,
                'href'=>route('category',$cat_top->hash),
            ];
            $this->data['bradcrumbs'][] = [
                'is_home'=>false,
                'title'=>$data['category']->title,
                'href'=>route('category',$data['category']->hash),
            ];
        }

        // Получаем ID категории и ее подкатегорий
        $categoryIds = Category::where('id', $data['category']->id)
            ->orWhere('top', $data['category']->id)
            ->pluck('id');

        // Фильтры из запроса
        $data['select_filters'] = [];
        if (!empty($request->filters)) {
            $data['select_filters'] = array_keys($request->filters);
        }

        $data['order_by'] = $request->get('order_by');
        $data['price_from'] = $request->price_from;
        $data['price_to'] = $request->price_to;

        // Получение товаров с учетом подкатегорий и фильтров
        $products = Product::with('filters')
            ->whereIn('categories_id', $categoryIds)
            ->when($request->price_from, fn($q) => $q->where('price', '>=', $request->price_from))
            ->when($request->price_to, fn($q) => $q->where('price', '<=', $request->price_to))
            ->when(!empty($data['select_filters']), function ($q) use ($data) {
                $q->whereHas('filters', fn($q) => $q->whereIn('filter_id', $data['select_filters']));
            });

        // Сортировка товаров
        if ($request->get('order_by') === 'price_increase') {
            $products->orderBy('price', 'asc');
        } elseif ($request->get('order_by') === 'price_decrease') {
            $products->orderBy('price', 'desc');
        }

        // Получаем ID товаров и фильтры
        $prod_ids = $products->pluck('id')->toArray();
        $filters = Filter::with('group')
            ->whereHas('products', fn($q) => $q->whereIn('products.id', $prod_ids))
            ->get()
            ->groupBy('group.title');

        $data['products'] = $products->paginate(4)->withQueryString();
        $data['filters'] = $filters;

//        dd($this->data['bradcrumbs']);
        return view('pages/category', ['data' => $data] + $this->data);
    }
}
