<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OnlyGuestMiddleware
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
        if($request->session()->exists("user")){
            return redirect("/");
<<<<<<< HEAD
        } else {
            return $next($request);
        }
        return $next($request);
=======
        }else {
            return $next($request);
        }
>>>>>>> bb861dcdee2fdeb13c2377f2f1e517f1d9c8f7de
    }
}
