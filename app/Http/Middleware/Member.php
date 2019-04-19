<?php

namespace App\Http\Middleware;

use Closure;

class Member
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
        if(!is_null(auth()->user()->idChurch_fk) && (auth()->user()->isMember == true))
            return $next($request);

        return redirect('/');
    }
}

