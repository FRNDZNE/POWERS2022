<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // return 'Halaman Dashboard';
        $data['user'] = User::where('id', Auth::user()->id)->with([
            'jurusan','prodi','role','permission','group'
        ])->first();
        // return $user;
        return view('backend.dashboard',compact('data'));
    }

    
}
