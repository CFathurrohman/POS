<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SaleController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'home']);

Route::get('/category', [ProductController::class, 'product']);
Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage']);
Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth']);
Route::get('/category/home-care', [ProductController::class, 'homeCare']);
Route::get('/category/baby-kid', [ProductController::class, 'babyKid']);


Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);

Route::get('/sale', [SaleController::class, 'sale']);
