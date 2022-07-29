<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\LandingController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Middleware\CheckLogin;

// s.auth
Route::get('/pilih-login', [AuthController::class, 'pilih_login'])->name('pilihlogin');
Route::get('/login-mhs', [AuthController::class, 'login_mhs'])->name('loginmhs');
Route::get('/login-pt', [AuthController::class, 'login_pt'])->name('loginpt');
Route::post('/login', [AuthController::class, 'post_login'])->name('post_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/register', [AuthController::class, 'register_post'])->name('post_register');
Route::get('/register-account', [AuthController::class, 'registeraccount'])->name('registeraccount');
// e.auth

// s.landing page
Route::get('/', [LandingController::class, 'landing'])->name('landing');
Route::get('/info-magang-detail', [LandingController::class, 'infomagangdetail'])->name('infomagangdetail');
Route::get('/info-detail-perusahaan/{id}', [LandingController::class, 'detailperusahaan'])->name('detailperusahaan');
Route::get('/data-magang/{id}', [LandingController::class, 'datamagang'])->name('datamagang');
Route::post('/ajukanmagang', [LandingController::class, 'ajukanmagang'])->name('ajukanmagang');
Route::get('/profile', [LandingController::class, 'profile'])->name('profile');
Route::post('/update-profile', [LandingController::class, 'update_profile'])->name('update_profile');
// e.landing page

// s.admin
Route::middleware([CheckLogin::class])->group(function(){
    Route::get('/dashboard-admin', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/magang-admin', [AdminController::class, 'magang'])->name('magang');
    Route::get('/magang-melamar-admin', [AdminController::class, 'magangmelamar'])->name('magangmelamar');
    Route::get('/magang-selesai-admin', [AdminController::class, 'magangselesai'])->name('magangselesai');
    Route::get('/magang-ditolak-admin', [AdminController::class, 'magangditolak'])->name('magangditolak');

    Route::get('/konten-admin', [AdminController::class, 'konten'])->name('konten');

    Route::get('/profile-magang/{id}', [AdminController::class, 'profilemagang'])->name('profilemagang');
    Route::post('/update-status-magang', [AdminController::class, 'ubahstatusmagang'])->name('updatestatusmagang');
});
// e.admin
