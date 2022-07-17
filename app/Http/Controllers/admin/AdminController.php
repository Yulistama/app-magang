<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('pages.admin.dashboard.admin');
    }
    
    public function magang()
    {
        return view('pages.admin.master_magang.magang');
    }
    
    public function magangmelamar()
    {
        return view('pages.admin.master_magang.magang_melamar');
    }
    
    public function magangselesai()
    {
        return view('pages.admin.master_magang.magang_selesai');
    }
    
    public function magangditolak()
    {
        return view('pages.admin.master_magang.magang_ditolak');
    }
    
    public function konten()
    {
        return view('pages.admin.konten.konten');
    }
    
    public function profilemagang()
    {
        return view('pages.admin.master_magang.profile_magang');
    }
}
