<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/admin/ok', function () {

    return view('admin.app');
});

Route::get('/', function () {
    return view('frontend.homePage');
});

Route::get('/shop', function () {
    return view('frontend.shopPage');
});
