<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        return view('pages.landing.landing');
    }
    
    public function infomagangdetail()
    {
        return view('pages.landing.detail_landing');
    }
    
    public function detailperusahaan()
    {
        return view('pages.landing.detail_perusahaan');
    }
    
    public function datamagang()
    {
        return view('pages.landing.data_magang');
    }
    
}
