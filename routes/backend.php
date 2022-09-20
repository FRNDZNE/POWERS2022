<?php

Route::middleware(['auth','role:admin','permission:yes'])->prefix('admin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('index.dashboard.admin');

    // CRUD User Universal
    Route::get('/user',[App\Http\Controllers\Backend\UserController::class, 'index'])->name('index.user');
    Route::get('user/createuser',[App\Http\Controllers\Backend\UserController::class, 'create'])->name('create.user');
    Route::post('user/storeuser',[App\Http\Controllers\Backend\UserController::class, 'store'])->name('store.user'); 
    Route::get('user/edituser/{id}',[App\Http\Controllers\Backend\UserController::class, 'edit'])->name('edit.user');
    Route::post('/user/updateuser/{id}',[App\Http\Controllers\Backend\UserController::class, 'update'])->name('update.user');
    Route::get('user/detail/{id}',[App\Http\Controllers\Backend\UserController::class, 'detail'])->name('detail.user');
    Route::post('user/destroy/{id}',[App\Http\Controllers\Backend\UserController::class, 'destroy'])->name('destroy.user');
    Route::post('/user/aktif/{id}',[App\Http\Controllers\Backend\UserController::class, 'aktifkan'])->name('aktif.user');
    Route::post('/user/nonaktif/{id}',[App\Http\Controllers\Backend\UserController::class, 'nonaktifkan'])->name('nonaktif.user');

    // Index User Per bidang
    Route::get('/user/core',[App\Http\Controllers\Backend\UserController::class, 'index_core'])->name('index.user.core');
    Route::get('/user/education',[App\Http\Controllers\Backend\UserController::class, 'index_edu'])->name('index.user.edu');
    Route::get('/user/publicrelation',[App\Http\Controllers\Backend\UserController::class, 'index_pr'])->name('index.user.pr');
    Route::get('/user/eventorganizer',[App\Http\Controllers\Backend\UserController::class, 'index_eo'])->name('index.user.eo');
    Route::get('/user/memberdevelopment',[App\Http\Controllers\Backend\UserController::class, 'index_mdd'])->name('index.user.mdd');
    Route::get('/user/ranger',[App\Http\Controllers\Backend\UserController::class, 'index_ranger'])->name('index.user.ranger');
    Route::get('/user/newrangernotacc',[App\Http\Controllers\Backend\UserController::class, 'index_new_no'])->name('index.user.new.no');
    Route::get('/user/newrangeracc',[App\Http\Controllers\Backend\UserController::class, 'index_new_yes'])->name('index.user.new.yes');
    
    

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

    // Group for mentor and mentee
    Route::get('/group',[App\Http\Controllers\Backend\GroupController::class, 'index'])->name('index.group');
    Route::post('/group/store', [App\Http\Controllers\Backend\GroupController::class, 'store'])->name('store.group');
    Route::post('/group/update', [App\Http\Controllers\Backend\GroupController::class, 'update'])->name('update.group');
    Route::post('/group/destroy/{id}', [App\Http\Controllers\Backend\GroupController::class, 'destroy'])->name('destroy.group');
    Route::get('/group/{id}',[App\Http\Controllers\Backend\GroupController::class, 'index_member'])->name('index.member.group');
    Route::post('group/{id}/storemember',[App\Http\Controllers\Backend\GroupController::class,'store_member'])->name('store.member.group');
    Route::post('/group/{id}/destroy/{member}',[App\Http\Controllers\Backend\GroupController::class,'destroy.member'])->name('destroy.member.group');
});
    // Select Box yang sifatnya universal bisa di akses semua ROLE
    Route::get('/jurusan/{jurusan}',[App\Http\Controllers\Backend\ProdiController::class, 'jurusan_prodi'])->name('prodi');

// Routing New Ranger and Ranger
Route::middleware(['auth','role:new|ranger'])->prefix('ranger')->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Backend\DashboardController::class,'index'])->name('index.dashboard.ranger');
    Route::get('/user/edituser/{id}',[App\Http\Controllers\Backend\UserController::class, 'edit'])->name('edit.user.ranger');
    Route::get('user/detail/{id}',[App\Http\Controllers\Backend\UserController::class, 'detail'])->name('detail.user.ranger');
    Route::post('/user/updateuser/{id}',[App\Http\Controllers\Backend\UserController::class, 'update_profile'])->name('update.user.ranger');

});

// Routing Core and Commitee
Route::middleware(['auth','role:core|commitee'])->prefix('commitee')->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Backend\DashboardController::class,'index'])->name('index.dashboard.commitee');
    Route::get('/user/edituser/{id}',[App\Http\Controllers\Backend\UserController::class, 'edit'])->name('edit.user.commitee');
    Route::get('user/detail/{id}',[App\Http\Controllers\Backend\UserController::class, 'detail'])->name('detail.user.commitee');
    Route::post('/user/updateuser/{id}',[App\Http\Controllers\Backend\UserController::class, 'update_profile'])->name('update.user.commitee');

});




