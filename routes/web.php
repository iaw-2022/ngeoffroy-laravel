<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\TorneoController;
use App\Http\Controllers\PartidoController;

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
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/equipos', 'App\Http\Controllers\EquipoController')->middleware('auth');
Route::resource('/jugadores', 'App\Http\Controllers\JugadorController')->middleware('auth');
Route::resource('/localidades', 'App\Http\Controllers\LocalidadController')->middleware('auth');
Route::resource('/torneos', 'App\Http\Controllers\TorneoController')->middleware('auth');
Route::resource('/partidos', 'App\Http\Controllers\PartidoController')->middleware('auth');


require __DIR__.'/auth.php';
