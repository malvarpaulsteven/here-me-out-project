<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Inspiring;
$quote = Inspiring::quote();

class DashboardController extends Controller
{
    public function index()
    {
        // return view('pages.dashboard');
    }
}
