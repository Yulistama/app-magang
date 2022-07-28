<?php

namespace App\Http\Middleware;
use App\Models\User;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try{
            
                $id_role = Session::get('user.id_role');
                if($id_role == 2) throw new Exception('Tidak memiliki hak akses');
                
                $user_id = Session::get('user.id');
                if(!$user_id) throw new Exception('Sesi telah berakhir, silahkan login kembali.');
        
                $user = User::where('id', $user_id)->first();
                if(!$user) throw new Exception('User tidak ada diaplikasi');
                if(!$user->is_active) throw new Exception('Akun dalam kondisi tidak aktif, mohon hubungi administrator untuk dilakukan pengecekan.');
        
                return $next($request);
            
        }catch(Exception $e){
            Session::flush();
            Session::flash('error', $e->getMessage());
            Log::error($e->getMessage().' Middleware:pilih-login');
            if(URL::current() == route('dashboard')) {
                Session::put('redirect', URL::current());
            }
            return redirect()->route('loginpt');
        }
    }
}
