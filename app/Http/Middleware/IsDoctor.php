<?php

namespace App\Http\Middleware;

use Closure;

class IsDoctor
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
        if (\Auth::check() && \Auth::user()->account_type == "medecin")
            return $next($request);
        abort(404);
    }
}
