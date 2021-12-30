<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $user = Auth::user()->role;

        //pr($user->alias);die;
        //logic of redirect according to user type
        if ($user->alias == 'admin') {
            return view('adminv.admin.dashboard');
        }
    }
}
