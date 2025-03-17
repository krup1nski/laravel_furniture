<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($hash){
        $product = Product::where('hash', $hash)->firstOrFail();
        $category = Category::where('id', $product->categories_id)->firstOrFail();
        return view('pages/product', compact('product', 'category'));
    }
}
