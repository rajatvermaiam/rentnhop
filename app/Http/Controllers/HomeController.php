<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Auth::user()->role;
        if ($role->alias == 'admin') {
            return redirect('admin/dashboard');
        }

        if ($role->alias == 'vendor') {
            return redirect('vendor/dashboard');
        }

        if (!$role->alias){
            return redirect('/');
        }
    }
}

