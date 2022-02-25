<?php

use App\Http\Controllers\Adminv\Admin\AdminController;
use App\Http\Controllers\Adminv\Admin\BlogCategeoryController;
use App\Http\Controllers\Adminv\Admin\BlogPostController;
use App\Http\Controllers\Adminv\Admin\CitiesController;
use App\Http\Controllers\Adminv\Admin\CouponController;
use App\Http\Controllers\Adminv\Admin\LocationController;
use App\Http\Controllers\Adminv\Admin\UserController;
use App\Http\Controllers\Adminv\Admin\VehicleController;

Route::get('dashboard', [AdminController::class, 'dashboard']);

Route::resource('user', UserController::class);

Route::resource('location', LocationController::class);

Route::resource('vehicle', VehicleController::class);

Route::resource('blog-category', BlogCategeoryController::class);

Route::resource('blog-posts', BlogPostController::class);

Route::resource('coupon', CouponController::class);

Route::resource('cities', CitiesController::class);

