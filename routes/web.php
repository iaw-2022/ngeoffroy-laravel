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
    return view('auth.login');
});

Route::resource('/dash', DashboardController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/equipos', 'App\Http\Controllers\EquipoController@index')->middleware('auth');

Route::get('/jugadores', 'App\Http\Controllers\JugadorController@index')->middleware('auth');

Route::get('/localidades', 'App\Http\Controllers\LocalidadController@index')->middleware('auth');

Route::get('/torneos', 'App\Http\Controllers\TorneoController@index')->middleware('auth');

Route::get('/partidos', 'App\Http\Controllers\PartidoController@index')->middleware('auth');


require __DIR__.'/auth.php';
