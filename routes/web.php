<?php

use App\Http\Controllers\admin\Categorycontroller;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\frontend\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
*/


Route::name('frontend.')
     ->group(function(){

        Route::get('/',[MainController::class,'index'])->name('index');
        Route::get('/shop',[MainController::class,'shop'])->name('shop');
        Route::get('/category/{category_name}',[MainController::class,'category'])->name('category_name');
        Route::get('/shop-details/{id} ',[MainController::class,'shopDetails'])->name('shop_details');
        Route::get('/cart',[MainController::class,'cart'])->name('cart');
        Route::get('/checkout',[MainController::class,'checkout'])->name('checkout');
        Route::get('/error/404',[MainController::class,'error'])->name('error');

     });

/*
|--------------------------------------------------------------------------
| Admin  Routes
|--------------------------------------------------------------------------
*/

Route::name('admin.')
     ->prefix('admin')
     ->group(function(){
            Route::resource('products',ProductController::class);
            Route::resource('categories',Categorycontroller::class);
            Route::resource('orders',OrderController::class);
            Route::resource('users',UserController::class);

     });

