<?php

use Illuminate\Support\Facades\Route;

Route::get('/store', [\App\Http\Controllers\StoreController::class, 'index']);
Route::get('/store/result', [\App\Http\Controllers\StoreController::class, 'result']);
Route::post('/store/login', [\App\Http\Controllers\StoreController::class, 'login']);

Route::post('/store/otp-login', [\App\Http\Controllers\StoreController::class, 'otp_login']);
Route::post('/store/resend-otp', [\App\Http\Controllers\StoreController::class, 'resend_otp']);


Auth::routes(['register' => false, 'reset' => false]);



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
