<?php
Route::get('/',[App\Http\Controllers\Frontend\LandingController::class, 'index'])->name('index.landing');