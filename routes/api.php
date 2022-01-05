<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaTurnoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::apiResource("peliculas","PeliculasController");
//Route::apiResource("turnos","TurnosController");
//Route::group(['middleware' => 'auth:api'], function () {
    Route::get("/pelicula_turno","PeliculaTurnoController@index");
    Route::post("/pelicula_turno/nuevo","PeliculaTurnoController@store");
    Route::put("/pelicula_turno/{id}","PeliculaTurnoController@update");
    Route::delete("/pelicula_turno/{id}","PeliculaTurnoController@destroy");
//});
