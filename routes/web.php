<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('isLogin')->group(function(){

    // login
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'loginProses'])->name('loginProses');
});

// logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('checkLogin')->group(function(){

    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // tugas
    Route::get('tugas', [TugasController::class, 'index'])->name('tugas');
     // tugas pdf
     Route::get('tugas/pdf', [TugasController::class, 'pdf'])->name('tugasPdf');


Route::middleware('isAdmin')->group(function () {

        // user
        Route::get('user', [UserController::class, 'index'])->name('user');

        // user tambah
        Route::get('user/tambah', [UserController::class, 'tambah'])->name('userTambah');

        // user kirim
        Route::post('user/kirim', [UserController::class, 'kirim'])->name('userKirim');

        // user edit
        Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('userEdit');
        Route::post('user/update/{id}', [UserController::class, 'update'])->name('userUpdate');

        // user hapus
        Route::get('user/destroy/{id}', [UserController::class, 'destroy'])->name('userDestroy');

        // user excell
        Route::get('user/excell', [UserController::class, 'excell'])->name('userExcell');

        // user pdf
        Route::get('user/pdf', [UserController::class, 'pdf'])->name('userPdf');


        // tugas tambah
        Route::get('tugas/create', [TugasController::class, 'create'])->name('tugasCreate');

        // tugas kirim
        Route::post('tugas/store', [TugasController::class, 'store'])->name('tugasStore');

        // tugas edit
        Route::get('tugas/edit/{id}', [TugasController::class, 'edit'])->name('tugasEdit');

        // tugas upadate
        Route::post('tugas/update/{id}', [TugasController::class, 'update'])->name('tugasUpdate');

        // tugas hapus
        Route::get('tugas/destroy/{id}', [TugasController::class, 'destroy'])->name('tugasDestroy');

        // tugas excell
        Route::get('tugas/excell', [TugasController::class, 'excell'])->name('tugasExcell');
    });

});


