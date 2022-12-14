<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Users');
    }

    public function index()
    {
        return view('backend.pages.users.index');
    }
}
