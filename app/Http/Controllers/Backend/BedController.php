<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BedController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Bed Management');
    }

    public function index()
    {
        return view('backend.pages.beds.index');
    }
}
