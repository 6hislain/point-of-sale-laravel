<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['home']);
    }

    public function home()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }
}
