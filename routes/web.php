<?php


use Illuminate\Support\Facades\Route;

Route::get('/store', [\App\Http\Controllers\StoreController::class, 'index']);
Route::get('/store/result', [\App\Http\Controllers\StoreController::class, 'result']);
Route::post('/store/product-list-modal', [\App\Http\Controllers\StoreController::class, 'product_list_modal']);


/** customer routes start */

Route::post('/customer/login', [\App\Http\Controllers\CustomerController::class, 'login']);
Route::post('/customer/otp-login', [\App\Http\Controllers\CustomerController::class, 'otp_login']);
Route::post('/customer/resend-otp', [\App\Http\Controllers\CustomerController::class, 'resend_otp']);

/** customer routes start */


/** cart routes start */

Route::post('/cart/add-cart', [\App\Http\Controllers\CartController::class, 'add_cart']);
Route::post('/cart/cart-delete-item', [\App\Http\Controllers\CartController::class, 'deleteItem']);

/** cart routes end*/

Auth::routes(['register' => false, 'reset' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
