<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservasUsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mostrarEventos',[ReservaController::class,'mostrarEventos']);
Route::post('/mesapillada',[FormularioController::class,'mesapillada']);
Route::post('/createUser', [AuthController::class, 'createUser']);
Route::post('/loginUser', [AuthController::class, 'loginUser']);
Route::get('/reservasUsuario', [ReservasUsuarioController::class, 'reservasUsuario']);
Route::delete('/eliminarReserva/{id}', [ReservasUsuarioController::class, 'eliminarReserva']);
