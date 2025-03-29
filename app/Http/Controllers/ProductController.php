<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FilterGroup;
use App\Models\Option;
use App\Models\Product;
use App\Models\OptionGroup;
use Illuminate\Http\Request;

class ProductController extends MainController
{
    public function index($hash){
        $product = Product::with('images', 'category', 'options.group', 'filters', 'accessories')
            ->where('hash', $hash)
            ->firstOrFail();
        $filters_group = FilterGroup::all();
        $options_group = OptionGroup::get();
        return view('pages/product', compact('product', 'filters_group', 'options_group'));

    }
}
