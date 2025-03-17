<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{hash}', [CategoriesController::class, 'index'])->name('category');
Route::get('/product/{hash}', [ProductController::class, 'index'])->name('product');


Route::get('/cart', function () {
    return view('pages/cart');
});


