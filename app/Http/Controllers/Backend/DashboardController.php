<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // return 'Halaman Dashboard';
        return view('backend.dashboard');
    }

    
}
