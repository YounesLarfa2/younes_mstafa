<?php

use App\Http\Controllers\admin\Categorycontroller;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/ok', function () {

    return view('admin.app');
});

Route::get('/', function () {
    return 'test';
});

<<<<<<< HEAD
Route::get('/shop', function () {
    return view('frontend.shopPage');
});
=======

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
>>>>>>> d67f3127191db90f440f4b988baa18dbc2c41381
