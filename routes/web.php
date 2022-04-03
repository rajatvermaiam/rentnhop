<?php


use Illuminate\Support\Facades\Route;

Route::get('/store', [\App\Http\Controllers\StoreController::class, 'index']);
Route::get('/store/voucher', [\App\Http\Controllers\StoreController::class, 'voucher']);
Route::get('/store/result', [\App\Http\Controllers\StoreController::class, 'result']);
Route::post('/store/product-list-modal', [\App\Http\Controllers\StoreController::class, 'product_list_modal']);

/** payment routes start*/

Route::get('/payment', [\App\Http\Controllers\PaymentController::class, 'index']);

Route::post('/payment/payment-status', [\App\Http\Controllers\PaymentController::class, 'payment_status']);

/** payment routes end*/

/** customer routes start */

Route::post('/customer/login', [\App\Http\Controllers\CustomerController::class, 'login']);
Route::post('/customer/otp-login', [\App\Http\Controllers\CustomerController::class, 'otp_login']);
Route::post('/customer/resend-otp', [\App\Http\Controllers\CustomerController::class, 'resend_otp']);

/** customer routes start */


/** cart routes start */

Route::post('/cart/proceed-payment', [\App\Http\Controllers\CartController::class, 'proceed_payment']);
Route::post('/cart/add-cart', [\App\Http\Controllers\CartController::class, 'add_cart']);
Route::post('/cart/cart-delete-item', [\App\Http\Controllers\CartController::class, 'deleteItem']);
Route::get('/cart/checkout', [\App\Http\Controllers\CartController::class, 'checkout']);
Route::post('/cart/update-cart', [\App\Http\Controllers\CartController::class, 'update_cart']);

/** cart routes end*/

Auth::routes(['register' => false, 'reset' => false]);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
