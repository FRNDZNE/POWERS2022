<?php
Route::get('/',[App\Http\Controllers\FrontEnd\LandingController::class, 'index'])->name('index.landing');