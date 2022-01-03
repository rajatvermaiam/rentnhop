<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

        $user = Auth::user()->role;

        //logic of redirect according to user type
        if ($user->alias == 'admin') {

            return redirect('admin/dashboard');
        }else{
            return redirect('vendor/dashboard');
        }

    }
}
