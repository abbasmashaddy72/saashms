<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Dashboard');
    }

    public function index()
    {
        return view('dashboard');
    }
}
