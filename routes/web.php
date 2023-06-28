<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaScormController;

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
    return view('index');
});

Route::get('/acercade', function () {
    return view('acercade');
});

Route::get('/ayuda', function () {
    return view('ayuda');
});

Route::get('/Lista', function () {
    return view('Lista');
});

Route::get('/InsertarVideo', function () {
    return view('InsertarVideo');
});

Route::get('/InsertarCuestionario', function () {
    return view('InsertarCuestionario');
});

Route::post('/CrearVideo', [ListaScormController::class, 'CrearVideo']);