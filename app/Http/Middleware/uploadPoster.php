<?php

namespace App\Http\Middleware;

use Closure;

class uploadPoster
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
        if (!$request->hasFile('picture')){
            return redirect('response/fail');
        }
        $file = $request->file('picture');
        if(!$file->isValid()){
            return redirect('response/fail');
        }

        $type = $file->getClientMimeType();
        if(!preg_match('/^(image\/(jpeg)|(png)|(gif))$/',$type)){//这里正则正斜杠忘了加转义坑死我了
            return redirect('response/fail');
        }
        //大小限制为5MB
        if($file->getClientSize() > 5242880){
            return redirect('response/fail');
        }


        return $next($request);
    }
}
