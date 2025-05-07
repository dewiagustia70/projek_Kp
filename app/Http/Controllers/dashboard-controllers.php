<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Middleware auth mencegah akses tanpa login
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Tampilkan dashboard
    public function index()
    {
        return view('dashboard'); 
    }
}
