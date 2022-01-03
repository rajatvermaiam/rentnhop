<?php

namespace App\Http\Controllers\Adminv\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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
