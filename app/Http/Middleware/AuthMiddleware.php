<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,string $role)
    {
    return $next($request);
    $role = auth()->user()->role;
    //   if (Auth::user() &&  Auth::user()->role == 1) {
    //         return $next($request);
    //    }
    //    abort(403);
    //    return back()->with('error','Opps, You\'re not Admin');

    if ($role == 'dashboard' && $role != 'utama' && $role != 'administrator') {
        abort(403);
    }

    
    }
}
