<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LandingController extends Controller
{
    public function index()
    {
        // return 'Under Maintenance';
        // $user = $user = User::with([
        //     'role',
        // ])->whereHas(
        //     'role', fn($q) => $q->where('name','core')
        // )->get();
        // return $user;
        return view('layouts.frontend.app');
    }
}
