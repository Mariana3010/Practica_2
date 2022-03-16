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
Route::get('/hi', function () {
    return view('codigos_p');
});
Route::get('/verCodigos',[CodigosController::class,'mostrarCodigos'])->name('mostrar.codigos');
Route::view("login","codigos_p");