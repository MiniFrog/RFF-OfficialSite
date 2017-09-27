<?php

namespace App\Http\Middleware;

use Closure;

class release
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
            !$request->has('poster')
            ||!$request->has('title')
            ||!$request->has('content')
            ||!$request->has('schedule')
            ||!$request->has('signUpLink')
        ){
            return redirect('response/fail');
        }

        $poster = $request->input('poster');

        if (!file_exists('img/poster/'.$poster)        ){
            return redirect('response/fail');
        }
        return $next($request);
    }
}
