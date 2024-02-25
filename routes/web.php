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

Route::prefix('category')->group(function () {
    Route::get('/', [ProductController::class, 'product']);
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);

Route::get('/sale', [SaleController::class, 'sale']);
