<?php

use Illuminate\Support\Facades\Route;

Route::get('/store', [\App\Http\Controllers\StoreController::class, 'index']);
Route::get('/store/result', [\App\Http\Controllers\StoreController::class, 'result']);
Route::post('/store/product-list-modal', [\App\Http\Controllers\StoreController::class, 'product_list_modal']);


Route::post('/customer/login', [\App\Http\Controllers\CustomerController::class, 'login']);
Route::post('/customer/otp-login', [\App\Http\Controllers\CustomerController::class, 'otp_login']);
Route::post('/customer/resend-otp', [\App\Http\Controllers\CustomerController::class, 'resend_otp']);


Auth::routes(['register' => false, 'reset' => false]);



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
