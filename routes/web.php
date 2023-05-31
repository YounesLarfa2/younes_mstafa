<?php

use App\Http\Controllers\admin\Categorycontroller;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\frontend\MainController;
use Illuminate\Support\Facades\Route;


Route::name('frontend.')
    ->group(function () {

        Route::get('/', [MainController::class, 'index'])->name('index');
        Route::get('/shop', [MainController::class, 'shop'])->name('shop');
        Route::get('/category/{categorie}', [MainController::class, 'category'])->name('category_name');
        Route::get('/shop-details/{id} ', [MainController::class, 'shopDetails'])->name('shop_details');
        Route::get('/cart', [MainController::class, 'cart'])->name('cart');
        Route::get('/checkout', [MainController::class, 'checkout'])->name('checkout');
        Route::get('/checkout/order-received/1015', [MainController::class, 'order_recieved'])->name('order_recieved');
        Route::get('/error/404', [MainController::class, 'error'])->name('error');
    });



Route::name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('home',function(){
            $collapsed = 'dashboard';

            return view('admin2.homePage',compact('collapsed'));
        })->name('home');
        Route::resource('products', ProductController::class);
        Route::post('product/store-img',[ProductController::class,'storeImages'])->name('products.storeImages');
        Route::resource('categories', Categorycontroller::class);
        Route::get('show_categories', [Categorycontroller::class ,'show_data'])->name('categories.list');
        Route::resource('orders', OrderController::class);
        Route::resource('users', UserController::class);
        Route::get('profile' ,[UserController::class,'profile'])->name('users.profile');
    });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
