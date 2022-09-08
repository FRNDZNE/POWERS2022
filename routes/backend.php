<?php

Route::middleware(['auth','role:admin','permission:yes'])->prefix('admin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/datanewrangeracc', [App\Http\Controllers\Backend\NewRangerController::class, 'index_acc'])->name('accnewranger');

    // CRUD User Universal
    Route::get('/user',[App\Http\Controllers\Backend\UserController::class, 'index'])->name('index.user');
    Route::get('user/createuser',[App\Http\Controllers\Backend\UserController::class, 'create'])->name('create.user');
    Route::post('user/storeuser',[App\Http\Controllers\Backend\UserController::class, 'store'])->name('store.user'); 
    Route::get('user/edituser/{id}',[App\Http\Controllers\Backend\UserController::class, 'edit'])->name('edit.user');
    Route::get('user/detail/{id}',[App\Http\Controllers\Backend\UserController::class, 'detail'])->name('detail.user');

    // Jurusan dan Prodi User
    // Jurusan
    Route::get('/jurusan',[App\Http\Controllers\Backend\JurusanController::class, 'index'])->name('index.jurusan');
    Route::post('/jurusan/store',[App\Http\Controllers\Backend\JurusanController::class, 'store'])->name('store.jurusan');
    Route::post('/jurusan/update',[App\Http\Controllers\Backend\JurusanController::class, 'update'])->name('update.jurusan');
    Route::post('/jurusan/destroy/{id}',[App\Http\Controllers\Backend\JurusanController::class,'destroy'])->name('destroy.jurusan');
   
    // Prodi
    Route::get('/jurusan/{jurusan}',[App\Http\Controllers\Backend\ProdiController::class, 'index'])->name('index.prodi');
    Route::post('/jurusan/{jurusan}/store',[App\Http\Controllers\Backend\ProdiController::class, 'store'])->name('store.prodi');
    Route::post('/jurusan/{jurusan}/update',[App\Http\Controllers\Backend\ProdiController::class, 'update'])->name('update.prodi');
    Route::post('/jurusan/{jurusan}/delete/{id}',[App\Http\Controllers\Backend\ProdiController::class, 'destroy'])->name('destroy.prodi');

});
    // Select Box yang sifatnya universal bisa di akses semua ROLE
    Route::get('/jurusan/{jurusan}',[App\Http\Controllers\Backend\ProdiController::class, 'jurusan_prodi'])->name('prodi');

// Routing New Ranger have a permission NO
Route::middleware(['auth','role:new','permission:no'])->prefix('newranger')->group(function(){

});



