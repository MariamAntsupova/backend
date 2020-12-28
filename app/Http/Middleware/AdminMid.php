<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->email == "adminadmin123@gmail.com"){
            \session('AdminMid', true);
            return $next($request);
        }
        return redirect()->route("error");
    }
}