<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "poweradmin" && Auth::guard($guard)->check()) {
            return redirect('/poweradmin');
        }
 
        if ($guard == "client" && Auth::guard($guard)->check()) {
            return redirect('/client');
        }
 
        if (Auth::guard($guard)->check()) {
            return redirect('/admin');
        }
 
        return $next($request);
    }



}
