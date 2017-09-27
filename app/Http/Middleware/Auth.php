<?php

namespace App\Http\Middleware;

use Closure;
use App\Traits\AuthOperationWithRequest;

class Auth
{
    use AuthOperationWithRequest;
    
    protected $request;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->request = $request;
        $session_exist = $request->session()->get('user_id', null);
        if($session_exist) {
            return $next($request);
        }
        if($this->verifyIdentityWithCookie()) {
            return $next($request);
        }
        return redirect('response/verify-identity-fail');
    }
}
