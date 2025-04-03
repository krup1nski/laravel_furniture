<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WishlistController extends MainController
{
    public function index(){
        $data['products']= Product::all();
        return view('pages/wishlist', $data);
    }
}
