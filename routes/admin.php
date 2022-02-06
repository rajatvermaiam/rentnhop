<?php

use App\Http\Controllers\Adminv\admin\AdminController;
use App\Http\Controllers\adminv\admin\UserController;
use App\Http\Controllers\adminv\admin\LocationController;
use App\Http\Controllers\adminv\admin\VehicleController;

Route::get('dashboard', [AdminController::class, 'dashboard']);

Route::resource('user', UserController::class);

Route::resource('location', LocationController::class);

Route::resource('vehicle', VehicleController::class);
