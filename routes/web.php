<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodigosController;
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
Route::get('/verCodigos',[CodigosController::class,'mostrarCodigos'])->name('mostrar.codigos');
Route::post('/codigos_p',[CodigosController::class,'buscar'])->name('buscar.p');
Route::view("login","codigos_p");