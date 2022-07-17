<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landing\LandingController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\landing\AuthController;

// s.landing page
Route::get('/', [LandingController::class, 'landing'])->name('landing');
Route::get('/info-magang-detail', [LandingController::class, 'infomagangdetail'])->name('infomagangdetail');
Route::get('/info-detail-perusahaan', [LandingController::class, 'detailperusahaan'])->name('detailperusahaan');
Route::get('/data-magang', [LandingController::class, 'datamagang'])->name('datamagang');
// e.landing page

// s.auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register-mhs', [AuthController::class, 'registermhs'])->name('registermhs');
Route::get('/register-perusahaan', [AuthController::class, 'registerperusahaan'])->name('registerperusahaan');
// e.auth

// s.admin
Route::get('/dashboard-admin', [AdminController::class, 'dashboard'])->name('dashboard');

Route::get('/magang-admin', [AdminController::class, 'magang'])->name('magang');
Route::get('/magang-melamar-admin', [AdminController::class, 'magangmelamar'])->name('magangmelamar');
Route::get('/magang-selesai-admin', [AdminController::class, 'magangselesai'])->name('magangselesai');
Route::get('/magang-ditolak-admin', [AdminController::class, 'magangditolak'])->name('magangditolak');

Route::get('/konten-admin', [AdminController::class, 'konten'])->name('konten');

Route::get('/profile-magang', [AdminController::class, 'profilemagang'])->name('profilemagang');
// e.admin
