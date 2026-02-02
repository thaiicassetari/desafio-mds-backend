<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Importe o Controller
use App\Http\Controllers\UsuarioController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('/acessar', [UsuarioController::class, 'acessar']); 
Route::post('/registrar', [UsuarioController::class, 'registrar']); 
Route::get('/listagem-usuarios', [UsuarioController::class, 'listagem']); 