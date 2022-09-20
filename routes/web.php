<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\NewRangerController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\JurusanController;
use App\Http\Controllers\Backend\ProdiController;
use App\Http\Controllers\Frontend\LandingController;
use App\Http\Controllers\Backend\GroupController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.frontend.app');
// });


Route::get('/dashboard', function(){
    if (Auth::user()->hasRole('admin')) {
        return redirect()->route('index.dashboard.admin')->with('success','Selamat Datang '. Auth::user()->name);
    } elseif (Auth::user()->hasRole(['core','commitee'])) {
        return redirect()->route('index.dashboard.commitee')->with('success','Selamat Datang '. Auth::user()->name);
    } elseif (Auth::user()->hasRole(['ranger','new'])) {
        return redirect()->route('index.dashboard.ranger')->with('success','Selamat Datang '. Auth::user()->name);
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

@include('backend.php');
@include('frontend.php');
