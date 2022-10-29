<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Settings');
    }

    public function index()
    {
        return view('backend.pages.settings.index');
    }
}
