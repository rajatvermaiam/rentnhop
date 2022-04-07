<?php

use App\Http\Controllers\Adminv\Admin\AdminController;
use App\Http\Controllers\Adminv\Admin\BlogCategeoryController;
use App\Http\Controllers\Adminv\Admin\BlogPostController;
use App\Http\Controllers\Adminv\Admin\BookingController;
use App\Http\Controllers\Adminv\Admin\CitiesController;
use App\Http\Controllers\Adminv\Admin\CouponController;
use App\Http\Controllers\Adminv\Admin\LocalityController;
use App\Http\Controllers\Adminv\Admin\PriceController;
use App\Http\Controllers\Adminv\Admin\UserController;
use App\Http\Controllers\Adminv\Admin\VehicleController;

Route::get('dashboard', [AdminController::class, 'dashboard']);

Route::resource('user', UserController::class);

Route::resource('price', PriceController::class);

Route::resource('vehicle', VehicleController::class);

Route::resource('blog-category', BlogCategeoryController::class);

Route::resource('blog-posts', BlogPostController::class);

Route::resource('coupon', CouponController::class);

Route::resource('cities', CitiesController::class);

Route::resource('locality', LocalityController::class);

/*booking route start*/
Route::get('/bookings', [BookingController::class, 'index']);
Route::get('/invoice', [BookingController::class, 'invoice']);
/*booking route end*/

