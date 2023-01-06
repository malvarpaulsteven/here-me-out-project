<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        }
        return view('pages.dashboard');
    }
}
