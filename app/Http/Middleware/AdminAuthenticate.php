<?php

namespace App\Http\Middleware;

use Closure;
use App\Admin;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->session()->get('admin_id', null)) {
            return $next($request);
        }
        if ($request->cookie('admin_id', null)) {
            Session::put('admin_id', $request->cookie('admin_id'));
            return $next($request);
        }
        $username = $request->input('username', null);
        $password = $request->input('password', null);
        if ($username && $password) {
            $admin = Admin::whereUsername($username)->first();
            if (!empty($admin)) {
                if ($admin->password == sha1($password)) {
                    Session::put('admin_id', $admin->id);
                    Cookie::queue('admin_id', $admin->id, 60 * 24 * 7);
                    return $next($request);
                }
            }
        }
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['state' => 'unauthenticated']);
        }
        return redirect('admin/login');
    }
}
