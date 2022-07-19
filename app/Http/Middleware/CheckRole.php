<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Middleware\Auth;
use Illuminate\Http\Request;

class CheckRole
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
        $cek = \Auth::check() && \Auth::user()->level;
        // dd($cek);
        if ($cek == 'Dosen') {
            return $next($request);
        }elseif($cek == 'Assesor'){
            return $next($request);
        }elseif($cek == 'Admin'){
            return $next($request);
        }
        // else{
        //    return back();
        // }

        // $role = array_slice(func_get_args(), 2);

        // foreach ($role as $role){
            // $user = \Auth::user()->level;
            // if($user == 'Dosen'){
            //     return view('/');
            // }elseif($user == 'Assesor'){
            //     return view('/assesor');
            // }elseif($user == 'Admin'){
            //     return view('/admin');
            // }
            // if($user == $role){
            //     return $next($request);
            // }else{
            //     return redirect('/admin');
            // }
        // }

        // return redirect('/admin');
    }
}
