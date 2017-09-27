<?php

namespace App\Http\Middleware;

use Closure;

class modify
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
        if (
            !$request->has('id')
            ||!$request->has('title')
            ||!$request->has('schedule')
            ||!$request->has('content')
            ||!$request->has('signUpLink')
        ){
            return redirect('response/fail');
        }

        return $next($request);
    }
}
