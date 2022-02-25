<?php

namespace App\Http\Controllers\Adminv\Admin;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function dashboard()
    {

        return view('adminv.admin.dashboard');
    }
}
