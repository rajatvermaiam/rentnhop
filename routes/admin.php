<?php

Route::get('dashboard', [App\Http\Controllers\adminv\admin\AdminController::class, 'dashboard']);

Route::resource('user',\App\Http\Controllers\adminv\admin\UserController::class);
