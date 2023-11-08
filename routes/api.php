<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamioneroController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/Camionero",[CamioneroController::class,"Listar"]);

Route::post("/Camionero/{d}",[CamioneroController::class,"ListarUno"]);

Route::post("/Camionero",[CamioneroController::class,"InsertarUno"]);

Route::post("/Camionero",[CamioneroController::class,"Modificar"]);

Route::post("/Camionero",[CamioneroController::class,"Eliminar"]);