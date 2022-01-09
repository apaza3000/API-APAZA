<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


  public function register(RegisterRequest $request)
  {
    $datavalidate=$request->validated();
    $user = User::create([
      'name' => $datavalidate['name'],
      'apellido' => $datavalidate['apellido'],
      'rol' => $datavalidate['rol'],
      'email' => $datavalidate['email'],
      'password' => Hash::make($datavalidate['password'])
    ]);

    // $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
      'code'=>"00",
      'msg'=>"El usuario se registro correctamente"
    ]);
  }

  /**
   * 
   */

  public function login(LoginRequest $request)
  {
    $data=$request->validated();
    $user=User::select('*')->where('email',$data['email'])->first();
if ($user) {
  return response()->json([
    "code"=>"200",
    "msg"=>"usuario encontrado",
    "data"=>$user
  ]);
} else {
  # code...
  return response()->json([
    "code"=>"404",
    "msg"=>"usuario no encontrado",
    "data"=>$user
  ]);
}

 
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
