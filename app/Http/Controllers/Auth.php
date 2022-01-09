<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use Illuminate\Auth\Authenticatable;

class Auth extends Controller
{
    //
  

    public function register(RegisterRequest $request)
    {
       

        return response()->json($request,200);
    }

    /**
     * 
     */

    public function login(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        return response()->json($request);
    }

    /**
     * 
     */

    public function logout()
    {
    }
    /**
     * 
     */
    public function profile()
    {
    }
    /**
     * 
     */
    
}
