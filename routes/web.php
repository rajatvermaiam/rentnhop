<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false, 'reset' => false]);



Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Adminv\admin\AdminController::class, 'dashboard']);

    Route::resource('user', App\Http\Controllers\Adminv\admin\UserController::class);


});

Route::middleware(['auth'])->prefix('vendor')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Adminv\vendor\VendorController::class, 'dashboard']);
});

