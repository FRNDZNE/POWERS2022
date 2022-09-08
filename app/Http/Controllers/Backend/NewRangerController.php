<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\Prodi;

class NewRangerController extends Controller
{
    public function index_acc()
    {
        $user = User::with([
            'jurusan','prodi'
        ])->get();
        // return $user;
        return view('backend.newranger',compact('user'));
    }
}
