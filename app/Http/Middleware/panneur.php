<?php

namespace App\Http\Middleware;

use Closure;

class panneur
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
    //     if ($request->role = 1) {
    //         return redirect('DashabordPaneur');
    //     }



        return $next($request);
    }
}
