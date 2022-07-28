<?php

namespace App\Http\Controllers\auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function pilih_login()
    {
        return view('pages.auth.pilih_login');
    }
    
    public function login_mhs()
    {
        return view('pages.auth.login_mhs');
    }
    
    public function login_pt()
    {
        return view('pages.auth.login_pt');
    }
    
    public function post_login(Request $request)
    {
        try{
            $validator = Validator::make($request->all(),[
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if($validator->fails()) throw new Exception($validator->errors()->first());

            $user = User::where('email', $request->email)->first();
            // dd($user);
            if(!$user) throw new Exception('Email tidak terdaftar');
            if(!Hash::check($request->password, $user->password)) throw new Exception('Email/Password tidak sesuai');

            Session::put('user.id', $user->id);
            Session::put('user.id_role', $user->id_role);
            Session::put('user.name', $user->name);
            Session::put('user.email', $user->email);
            Session::put('user.status', $user->status);
            Session::put('user.phone', $user->phone);

            // if(Session::get('redirect')) {
            //     $redirect = Session::get('redirect');
            //     Session::forget('redirect');
            //     return redirect($redirect);
            // }

            if($user->id_role == 1){
                return redirect()->route('dashboard');
            }else if($user->id_role == 2){
                return redirect()->route('landing');
            }

        } catch (Exception $e){
            Log::error($e->getMessage().'AuthController:post_login');
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }

    public function logout() {
        try {
            Session::flush();
            return redirect()->route('landing');
        } catch (Exception $e) {
            Log::error($e->getMessage().' AuthController:logout');
            Session::flash('error', $e->getMessage());
            return redirect()->route('landing');
        }
    }

    public function registeraccount()
    {
        return view('pages.auth.register');
    }

    public function register_post(Request $request)
    {
        try{
            // dd($request->all());

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|numeric',
                'password' => 'required',
                'confirm_password' => 'required_with:password|same:password|required',
                'role' => 'required',
            ]);
            if($validator->fails()) throw new Exception($validator->errors()->first());

            $add_users            = new User;
            $add_users->name      = $request->name;
            $add_users->email     = $request->email;
            $add_users->phone     = $request->phone;
            $add_users->id_role   = $request->role;
            $add_users->password  = Hash::make($request->confirm_password);
            $add_users->is_active = 1;
            $add_users->save();

            Session::flash('alert.notification.users_add', true);

            if($request->role == 1){
                Session::flash('pt', true);
            }else if($request->role == 2){
                Session::flash('mhs', true);
            }

            return redirect()->back()->withInput();

        }catch (Exception $e){
            Log::error($e->getMessage().'AuthController:register_post');
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
