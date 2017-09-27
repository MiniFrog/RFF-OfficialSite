<?php

namespace App\Http\Middleware;

use Closure;

class updateHtml
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
            !$request->has('type')
            ||!$request->has('title')
            ||!$request->has('id')
            ||!$request->has('content')
            ||!$request->has('abstract')
        ){
            return redirect('response/fail');
        }
        $type = $request->input('type');


        if (!preg_match('/^((report)|(repairSkill)|(share))$/',$type)){
            return redirect('response/fail');
        }

        return $next($request);
    }
}
