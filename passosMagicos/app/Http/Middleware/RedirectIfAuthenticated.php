<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        if (!Auth::guard($guard)->check()) return $next($request);
        if($guard['tipo'] == 2) return redirect(RouteServiceProvider::HOMEALUNO);
        if($guard['tipo'] == 1) return redirect(RouteServiceProvider::HOMEPROF);
        return redirect(RouteServiceProvider::HOMEADM);
    }
}
