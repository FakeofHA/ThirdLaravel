<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Cookie;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->roleId != 1){
            Cookie::queue(Cookie::forget('laravel_session'));
            Cookie::queue(Cookie::forget('XSRF-TOKEN'));
            return redirect()->route('login');
        }

        return $next($request);
    }
}
