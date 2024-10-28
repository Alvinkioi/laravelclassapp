<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/products', ProductController::class);
Route::resource('/services', ServiceControler::class);