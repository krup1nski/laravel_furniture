<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($hash){
        $data['category'] = Category::where('hash', $hash)->first();
        $data['products'] = Product::where('categories_id', $data['category']->id)->get();
//        dd($data);
        return view('pages/category', compact('data'));
    }
}
