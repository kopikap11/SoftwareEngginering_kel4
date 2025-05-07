<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProses'])->name('loginProses');


// logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('checkLogin')->group(function () {
    // dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');




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

    // user excell
    Route::get('user/pdf', [UserController::class, 'pdf'])->name('userPdf');

    // tugas
    Route::get('tugas', [TugasController::class, 'index'])->name('tugas');
});


