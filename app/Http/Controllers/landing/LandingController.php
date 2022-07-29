<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Magang;
use App\Models\Mahasiswa;
use App\Models\Perusahaan;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class LandingController extends Controller
{
    public function landing()
    {
        try{
            $perusahaan = Perusahaan::paginate(8);

            $data['perusahaan'] = $perusahaan;

            return view('pages.landing.landing', $data);
        }catch(Exception $e){
            Log::error($e->getMessage().'LandingController:landing');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    
    public function infomagangdetail()
    {
        try{
            $perusahaan = Perusahaan::all();
            $data['perusahaan'] = $perusahaan;

            return view('pages.landing.detail_landing', $data);
        }catch (Exception $e){
            Log::error($e->getMessage().'LandingController:infomagangdetail');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }
    
    public function detailperusahaan(Request $request)
    {
        try{
            $perusahaan = Perusahaan::where('id_perusahaan', $request->id)->first();
            $data['perusahaan'] = $perusahaan;

            return view('pages.landing.detail_perusahaan', $data);
        }catch (Exception $e){
            Log::error($e->getMessage().'LandingController:infomagangdetail');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
        
    }

    public function ajukanmagang(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'start_date' => 'required',
                'end_date' => 'required',
            ]);
            if($validator->fails()) throw new Exception($validator->errors()->first());

            if(!$request->id_user){
                Alert::error('Error', 'Anda harus login terlebih dahulu!');
            }else{
                
                $add_magang                 = new Magang;
                $add_magang->id_mhs         = $request->id_user;
                $add_magang->id_perusahaan  = $request->id_perusahaan;
                $add_magang->status         = 'Melamar';
                $add_magang->position       = $request->position;
                $add_magang->nama_pt        = $request->nama_pt;
                $add_magang->nama_mhs       = $request->nama_mhs;
                $add_magang->start_date     = $request->start_date;
                $add_magang->end_date       = $request->end_date;
                $add_magang->save();
                
                Alert::success('Berhasil', 'Anda berhasil mengajukan lamaran magang');
            }
               
            return redirect()->back()->withInput();

        }catch (Exception $e){
            Log::error($e->getMessage().'LandingController:ajukanmagang');
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
    
    public function datamagang(Request $request)
    {
        try{
            $magang = Magang::where('id_mhs', $request->id)->orderByDesc('id')->get();
            $data['magang'] = $magang;

            return view('pages.landing.data_magang', $data);
        }catch (Exception $e){
            Log::error($e->getMessage().'LandingController:datamagang');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function profile()
    {
        try{
            $id = Session::get('user.id');
            $profile = Mahasiswa::where('id_mhs', $id)->first();

            $data['profile'] = $profile;

            return view('pages.landing.profile', $data);
        }catch (Exception $e){
            Log::error($e->getMessage().'LandingController:profile');
            Session::flash('error', $e->getMessage());
            return redirect()->back();
        }
    }

    public function update_profile(Request $request)
    {
        try{
            $id = Session::get('user.id');

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'nim' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'alamat' => 'required',
            ]);
            if($validator->fails()) throw new Exception($validator->errors()->first());

            Mahasiswa::where('id_mhs', $id)
            ->update([
                'name' => $request->name,
                'nim' => $request->nim,
                'email' => $request->email,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'about' => $request->about,
            ]);

            User::where('id', $id)
            ->update([
                'email' => $request->email,
                'phone' => $request->phone,
            ]);

            Alert::success('Berhasil', 'Anda berhasil mengubah data profile');

            return redirect()->back()->withInput();
        }catch(Exception $e){
            Log::error($e->getMessage().'LandingController:update_profile');
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
    
}
