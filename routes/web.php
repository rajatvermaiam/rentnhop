<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false, 'reset' => false]);



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/admin/dashboard', [App\Http\Controllers\admin\AdminController::class, 'dashboard']);

    Route::get('/vendor/dashboard', [App\Http\Controllers\vendor\VendorController::class, 'dashboard']);
});
