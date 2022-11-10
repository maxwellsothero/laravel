<?php

use App\Http\Controllers\ClienteController;

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste',function(){
    echo '<h1>ola mundo</h1>';
});

Route::any('/login',[LoginController::class,'login']);

Route::get('/cliente',[ClienteController::class,'list']);
//any significa que poder ser to tipo GET OU POST http method
Route::any('/cliente/novo',[ClienteController::class,'add']);

Route::get('/excluir-cliente/{id}',[ClienteController::class,'remove']);
Route::any('/editar-cliente/{id}',[ClienteController::class,'update']);

