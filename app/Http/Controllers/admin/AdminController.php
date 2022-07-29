<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Magang;
use App\Models\Mahasiswa;
use App\Models\Perusahaan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function dashboard()
    {
        try{
            $id = Session::get('user.id');
            $magang = Magang::where('id_perusahaan', $id)->Where('status', 'Terima')->orderByDesc('id')->get();
            $data['magang'] = $magang;

            return view('pages.admin.dashboard.admin', $data);
        }catch (Exception $e){
            Log::error($e->getMessage().'AdminController:dashboard');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    
    public function magang()
    {
        try{
            $id = Session::get('user.id');
            $magang = Magang::where('id_perusahaan', $id)->Where('status', 'Terima')->orderByDesc('id')->get();
            $data['magang'] = $magang;

            return view('pages.admin.master_magang.magang', $data);
        }catch (Exception $e){
            Log::error($e->getMessage().'AdminController:magang');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    
    public function magangmelamar()
    {
        try{
            $id = Session::get('user.id');
            $magang = Magang::where('id_perusahaan', $id)->Where('status', 'Melamar')->orderByDesc('id')->get();
            $data['magang'] = $magang;

            return view('pages.admin.master_magang.magang_melamar', $data);
        }catch (Exception $e){
            Log::error($e->getMessage().'AdminController:magangmelamar');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    
    public function magangselesai()
    {
        try{
            $id = Session::get('user.id');
            $magang = Magang::where('id_perusahaan', $id)->Where('status', 'Selesai')->orderByDesc('id')->get();
            $data['magang'] = $magang;

            return view('pages.admin.master_magang.magang_selesai', $data);
        }catch (Exception $e){
            Log::error($e->getMessage().'AdminController:magangselesai');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    
    public function magangditolak()
    {
        try{
            $id = Session::get('user.id');
            $magang = Magang::where('id_perusahaan', $id)->Where('status', 'Tolak')->orderByDesc('id')->get();
            $data['magang'] = $magang;

            return view('pages.admin.master_magang.magang_ditolak', $data);
        }catch (Exception $e){
            Log::error($e->getMessage().'AdminController:magangditolak');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
       
    public function profilemagang(Request $request)
    {
        try{
            $mhs = Mahasiswa::where('id_mhs', $request->id)->first();
            $status_magang = Magang::where('id_mhs', $request->id)->first();

            $data['mhs'] = $mhs;
            $data['status_magang'] = $status_magang;

            return view('pages.admin.master_magang.profile_magang', $data);
        }catch(Exception $e){
            Log::error($e->getMessage().'AdminController:profilemagang');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function ubahstatusmagang(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'status' => 'required',
            ]);
            if($validator->fails()) throw new Exception($validator->errors()->first());

            $status = null;

            if($request->status == 1){
                $status = 'Terima';
            }else if($request->status == 2){
                $status = 'Tolak';
            }else if($request->status == 3){
                $status = 'Selesai';
            }

            Mahasiswa::where('id_mhs', $request->id_mhs)
            ->update([
                'status' => $status
            ]);

            Magang::where('id_mhs', $request->id_mhs)
            ->update([
                'status' => $status
            ]);

            Alert::success('Berhasil', 'Anda berhasil mengubah status');

            return redirect()->back()->withInput();

        }catch(Exception $e){
            Log::error($e->getMessage().'AdminController:ubahstatusmagang');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function konten()
    {
        try{
            $id = Session::get('user.id');
            $perusahaan = Perusahaan::where('id_perusahaan', $id)->first();
            // dd($perusahaan);
            $data['perusahaan'] = $perusahaan;

            return view('pages.admin.konten.konten', $data);
        }catch(Exception $e){
            Log::error($e->getMessage().'AdminController:konten');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
}
