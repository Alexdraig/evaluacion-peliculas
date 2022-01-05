<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\TurnosController;

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

//Route::resource('peliculas', PeliculasController::class);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('peliculas', [PeliculasController::class, 'index'])->name('peliculas.index');

Route::post('peliculas/create', [PeliculasController::class, 'store'])->name('peliculas.store');

Route::get('turnos', [TurnosController::class, 'index'])->name('turnos.index');

Route::post('turnos/create', [TurnosController::class, 'store'])->name('turnos.store');
