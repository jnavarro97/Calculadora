<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

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

Route::get('/sumar/{numero1}/{numero2}', [CalculadoraController::class, 'sumar']);
Route::get('/restar/{numero1}/{numero2}', [CalculadoraController::class, 'restar']);
Route::get('/dividir/{numero1}/{numero2}', [CalculadoraController::class, 'dividir']);
Route::get('/multiplicar/{numero1}/{numero2}', [CalculadoraController::class, 'multiplicar']);
