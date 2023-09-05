<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OnlyMemberMiddleware
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
<<<<<<< HEAD
        if($request->session()->exists("user")){
            return $next($request);
        }else {
=======
        if ($request->session()->exists("user")) {
            return $next($request);
        } else {
>>>>>>> bb861dcdee2fdeb13c2377f2f1e517f1d9c8f7de
            return redirect("/");
        }
    }
}
