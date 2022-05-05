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
Route::get('/equipos/edit', 'App\Http\Controllers\EquipoController@edit')->middleware('auth');
Route::get('/equipos/create', 'App\Http\Controllers\EquipoController@create')->middleware('auth');
Route::get('/equipos/destroy', 'App\Http\Controllers\EquipoController@destroy')->middleware('auth');

Route::get('/jugadores', 'App\Http\Controllers\JugadorController@index')->middleware('auth');
Route::get('/jugadores/edit', 'App\Http\Controllers\JugadorController@edit')->middleware('auth');
Route::get('/jugadores/create', 'App\Http\Controllers\JugadorController@create')->middleware('auth');
Route::get('/jugadores/destroy', 'App\Http\Controllers\JugadorController@destroy')->middleware('auth');

Route::get('/localidades', 'App\Http\Controllers\LocalidadController@index')->middleware('auth');
Route::get('/localidades/edit', 'App\Http\Controllers\LocalidadController@edit')->middleware('auth');
Route::get('/localidades/create', 'App\Http\Controllers\LocalidadController@create')->middleware('auth');
Route::get('/localidades/destroy', 'App\Http\Controllers\LocalidadController@destroy')->middleware('auth');

Route::get('/torneos', 'App\Http\Controllers\TorneoController@index')->middleware('auth');
Route::get('/torneos/edit', 'App\Http\Controllers\TorneoController@edit')->middleware('auth');
Route::get('/torneos/create', 'App\Http\Controllers\TorneoController@create')->middleware('auth');
Route::get('/torneos/destroy', 'App\Http\Controllers\TorneoController@destroy')->middleware('auth');

Route::get('/partidos', 'App\Http\Controllers\PartidoController@index')->middleware('auth');
Route::get('/partidos/edit', 'App\Http\Controllers\PartidoController@edit')->middleware('auth');
Route::get('/partidos/create', 'App\Http\Controllers\PartidoController@create')->middleware('auth');
Route::get('/partidos/destroy', 'App\Http\Controllers\PartidoController@destroy')->middleware('auth');


require __DIR__.'/auth.php';
