<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Blood');
    }

    public function index()
    {
        return view('backend.pages.bloods.index');
    }
}
