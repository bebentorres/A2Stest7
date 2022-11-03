<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        if (Auth::check() && Auth::user()->role == 'employer') {
            return view('users.employer.dashboard');
        }
        elseif (Auth::check() && Auth::user()->role == 'jobseeker') {
            return view('users.jobseeker.dashboard');
        }
        else {
            return view('users.admin.dashboard');
        }
    }
}
