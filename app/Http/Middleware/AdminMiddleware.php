<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function admin($request, Closure $next)
    {
        if(Auth::user()->email == "admin@admin.com"){
            return $next($request);
        }
    }
}
