<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
});
Route::get('/category', function () {
    return view('pages/category');
});
Route::get('/product', function () {
    return view('pages/product');
});
Route::get('/cart', function () {
    return view('pages/cart');
});


