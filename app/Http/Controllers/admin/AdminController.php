<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Magang;
use App\Models\Mahasiswa;
use App\Models\Perusahaan;
use App\Models\Positions;
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

            $job = Positions::where('id_perusahaan', $id)->orderByDesc('id')->get();
            $data['jobs'] = $job;

            return view('pages.admin.konten.konten', $data);
        }catch(Exception $e){
            Log::error($e->getMessage().'AdminController:konten');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function ubahperusahaan(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'about' => 'required',
                'location' => 'required',
                'category' => 'required',
            ]);
            if($validator->fails()) throw new Exception($validator->errors()->first());

            Perusahaan::where('id_perusahaan', Session::get('user.id'))->update([
                'name' => $request->name,
                'about' => $request->about,
                'location' => $request->location,
                'category' => $request->category,
                'address'       => $request->address,
                'phone'       => $request->phone,
                'email'       => $request->email,
                'employee'       => $request->employee,
                'project_url'       => $request->project_url,
                'image'  => $request->image
            ]);

            Alert::success('Berhasil', 'Anda berhasil mengedit perusahaan');
            return redirect()->back()->withInput();
        } catch (Exception $e) {
            Log::error($e->getMessage().'AdminController:ubahperusahaan');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }    

    public function tambahjob(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'position' => 'required',
                'date' => 'required',
                'status' => 'required',
            ]);
            if($validator->fails()) throw new Exception($validator->errors()->first());

            $id = Session::get('user.id');
            if(!$id){
                Alert::error('Error', 'Anda harus login terlebih dahulu!');
            }else{
                
                $add_position                 = new Positions;                
                $add_position->id_perusahaan  = $id;
                $add_position->name           = $request->name;
                $add_position->position       = $request->position;
                $add_position->date           = $request->date;
                $add_position->status         = $request->status;                
                $add_position->jobdesc_1       = $request->jobdesc_1;
                $add_position->jobdesc_2       = $request->jobdesc_2;
                $add_position->jobdesc_3       = $request->jobdesc_3;
                $add_position->jobdesc_4       = $request->jobdesc_4;
                $add_position->jobdesc_5       = $request->jobdesc_5;
                $add_position->requirements_1  = $request->requirements_1;
                $add_position->requirements_2  = $request->requirements_2;
                $add_position->requirements_3  = $request->requirements_3;
                $add_position->requirements_4  = $request->requirements_4;
                $add_position->requirements_5  = $request->requirements_5; 
                $add_position->descriptions  = $request->descriptions; 
                $add_position->save();
                
                Alert::success('Berhasil', 'Anda berhasil menambahkan job baru');
            }
               
            return redirect()->back()->withInput();


        } catch (Exception $e) {
            Log::error($e->getMessage().'AdminController:tambahjob');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function ubahjob(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'position' => 'required',
                'date' => 'required',
                'status' => 'required',
            ]);
            if($validator->fails()) throw new Exception($validator->errors()->first());

            Positions::where('id', $request->id)->update([
                'name' => $request->name,
                'position' => $request->position,
                'date' => $request->date,
                'status' => $request->status,
                'jobdesc_1'       => $request->jobdesc_1,
                'jobdesc_2'       => $request->jobdesc_2,
                'jobdesc_3'       => $request->jobdesc_3,
                'jobdesc_4'       => $request->jobdesc_4,
                'jobdesc_5'       => $request->jobdesc_5,
                'requirements_1'  => $request->requirements_1,
                'requirements_2'  => $request->requirements_2,
                'requirements_3'  => $request->requirements_3,
                'requirements_4'  => $request->requirements_4,
                'requirements_5'  => $request->requirements_5, 
                'descriptions'  => $request->descriptions
            ]);

            Alert::success('Berhasil', 'Anda berhasil mengedit job');
            return redirect()->back()->withInput();
        } catch (Exception $e) {
            Log::error($e->getMessage().'AdminController:ubahjob');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function hapusjob($id)
    {
        try {
            $job = Positions::findOrFail($id);
            if (!$job) {
                Alert::error('Error', 'Job tidak ditemukan');             
            }else {
                $job->delete();
                Alert::success('Berhasil', 'Anda berhasil menghapus job');
            }            
            return redirect()->back()->withInput();
        } catch (Exception $e) {
            Log::error($e->getMessage().'AdminController:hapusjob');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
}
