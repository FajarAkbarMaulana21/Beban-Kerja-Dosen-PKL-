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
        $role = array_slice(func_get_args(), 2);
        foreach ($role as $role){
            $user = \Auth::user()->level;
            if($user == $role){
                return $next($request);
            }
        }
        return redirect('/admin');
    }
}
