<?php
namespace App\Http\Middleware;

use Closure;
use DB;

class Admin
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request            
     * @param \Closure $next            
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->session('admin_id', false)) {
            return $next($request);
        }
        $token = $request->cookies->get('admin_token', false);
        $id = $request->cookies->get('admin_id', false);
        if (! $token || ! $id) {
            return redirect('lack-authority');
        }
        $admin = DB::table('admin')->find($id);
        if (! $admin) {
            return redirect('lack-authority');
        }
        if($admin->password != $token) {
            return redirect('lack-authority');
        } 
        return $next($request);
    }
}
