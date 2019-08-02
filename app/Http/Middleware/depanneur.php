<?php

namespace App\Http\Middleware;

use Closure;

class depanneur
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
    //     if ($request->role = 2) {
    //         return redirect('DashaborDepanneur');
    //     }



        return $next($request);
    }
}