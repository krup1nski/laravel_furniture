<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends MainController
{
    public function index(){
        $categories = Category::withCount('products')->get();
//        dd($categories);
        return view('pages/home', compact('categories'));
    }
}
