<?php

use Illuminate\Support\Facades\Route;

Route::get('/store', [\App\Http\Controllers\StoreController::class, 'index']);



Auth::routes(['register' => false, 'reset' => false]);



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
