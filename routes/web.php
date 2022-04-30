<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

Route::get('equipos', function(){
    return "pagina para equipos";
});

Route::get('jugadores', function(){
    return "pagina para jugadores";
});

Route::get('torneos', function(){
    return "pagina para torneos";
});

Route::get('localidades', function(){
    return "pagina para localidades";
});

Route::get('partidos', function(){
    return "pagina para partidos";
});


require __DIR__.'/auth.php';
