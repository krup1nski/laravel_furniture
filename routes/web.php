<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
});
Route::get('/category', function () {
    return view('pages/category');
});

