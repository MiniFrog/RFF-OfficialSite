<?php

namespace App\Http\Controllers;

class ResponseRedirect extends Controller
{
    //
    public function verifyIdentityFail()
    {
        return response()->json(array('state' => 'notSigned'));
    }
    
    public function lackAuthority()
    {
        return response()->json(array('state' => 'lackAuthority'));
    }

    public function fail(){
        return response()->json(array('state' => 'fail'));
    }
}
