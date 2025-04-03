<?php

use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{hash}', [CategoriesController::class, 'index'])->name('category');
Route::get('/product/{hash}', [ProductController::class, 'index'])->name('product');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/cart/thanks', [CartController::class, 'thanks'])->name('thanks');
Route::get('/accessories', [AccessoriesController::class, 'index'])->name('accessories');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

Route::post('/cart/order', [CartController::class, 'order'])->name('cart-order');


