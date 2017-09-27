<?php

namespace App\Http\Middleware;

use Closure;

class uploadHtml
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
            ||!$request->has('content')
            ||!$request->has('abstract')
            ||!$request->has('surfacePlot')
        ){
            return redirect('response/fail');
        }

        $type = $request->input('type');
        $surfacePlot = $request->input('surfacePlot');

        if (
            !preg_match('/^((report)|(repairSkill)|(share))$/',$type)
            ||!file_exists('img/surfacePlot/'.$surfacePlot)
        ){
            return redirect('response/fail');
        }

        //视情况也要对content做参数过滤，这里留个空吧

        return $next($request);
    }
}
