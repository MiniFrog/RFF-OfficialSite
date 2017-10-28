<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->get('admin_id', null)) {
            return view('admin/main');
        }
        if ($request->cookie('admin_id', null)) {
            Session::put('admin_id', $request->cookie('admin_id'));
            return view('admin/main');
        }
        $username = $request->input('username', null);
        $password = $request->input('password', null);
        if ($username && $password) {
            $admin = Admin::whereUsername($username)->first();
            if (!empty($admin)) {
                if ($admin->password == sha1($password)) {
                    Session::put('admin_id', $admin->id);
                    Cookie::queue('admin_id', $admin->id, 60 * 24 * 7);
                    return view('admin/main');
                }
            }
        }
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['state' => 'unauthenticated']);
        }
        return view('admin/index');
    }
}
