<?php

use App\Http\Controllers\Api\ClienteApiController;
use App\Http\Controllers\Api\ProductApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes',[ClienteApiController::class, 'getList']);
Route::get('/clientes/{id}',[ClienteApiController::class, 'getOne']);
Route::post('/clientes',[ClienteApiController::class, 'create']);
Route::delete('/clientes/{id}',[ClienteApiController::class, 'remove']);
Route::patch('/clientes/{id}',[ClienteApiController::class, 'update']);

Route::get('/produtos',[ProductApiController::class, 'getList']);
Route::get('/produtos/{id}',[ProductApiController::class, 'getOne']);


