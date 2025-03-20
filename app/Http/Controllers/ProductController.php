<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductOptionGroup;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($hash){
        $product = Product::with('images', 'category', 'options.group')->where('hash', $hash)->firstOrFail();
        $grouppp = ProductOptionGroup::all();
        return view('pages/product', compact('product', 'grouppp'));
    }
}
