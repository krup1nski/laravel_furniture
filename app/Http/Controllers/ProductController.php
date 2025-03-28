<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FilterGroup;
use App\Models\Product;
use App\Models\ProductOptionGroup;
use Illuminate\Http\Request;

class ProductController extends MainController
{
    public function index($hash){
        $product = Product::with('images', 'category', 'options.group', 'filters', 'accessories')
            ->where('hash', $hash)
            ->firstOrFail();

        $grouppp = ProductOptionGroup::all();
        $filters_group = FilterGroup::all();
        return view('pages/product', compact('product', 'grouppp', 'filters_group'));

    }
}
