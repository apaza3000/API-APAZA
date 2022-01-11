<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarcaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/registro', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

/**
 * RUTAS DE MARCA
 */

Route::get('marca', [MarcaController::class, 'getAll']);
Route::get('marca/{id}', [MarcaController::class, 'getId']);
Route::post('marca', [MarcaController::class, 'store']);
Route::put('marca/{id}', [MarcaController::class, 'update']);
Route::delete('marca/{marca}', [MarcaController::class, 'destroy']);

/**
 * RUTAS CLIENTE
 */

 Route::get('cliente',[ClienteController::class,'getAll']);
 Route::get('cliente/{id}',[ClienteController::class,'getId']);
 Route::post('cliente',[ClienteController::class,'store']);
 Route::put('cliente/{id}',[ClienteController::class,'update']);
 Route::delete('cliente/{cliente}',[ClienteController::class,'destroy']);