<?php

use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\AsistenciasController;
use App\Http\Controllers\EliminatoriasController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\filtro_GroupController;
use App\Http\Controllers\GoleadoresController;
use App\Http\Controllers\GolesController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\PartidosController;
use App\Http\Controllers\TablaController;
use App\Http\Controllers\Team_GroupController;
use App\Http\Controllers\Team_playerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});

Auth::routes();
//equipos
Route::resource('equipos', EquipoController::class);
//partidos
Route::resource('partidos', PartidosController::class);
//equipos
Route::resource('eliminatorias', EliminatoriasController::class);
//eliminatorias
Route::resource('tabla', TablaController::class);
//grupos
Route::resource('grupos', GroupController::class);
//jugadores
Route::resource('jugadores', JugadoresController::class);
//jugadores x equipo
Route::get('/equipos/{equipo}/jugadores',[Team_playerController::class,'index']);
//equipos x grupo
Route::get('/grupos/{grupo}/equipos',[Team_GroupController::class,'index']);
//equipos
Route::get('tablagrupo',[filtro_GroupController::class,'index']);
//goles
Route::resource('goles', GolesController::class);
//goleadores
Route::get('goleadores',[GoleadoresController::class,'index']);
//asistencia
Route::resource('asistencia', AsistenciaController::class);
//asistencias
Route::get('asistencias',[AsistenciasController::class,'index']);
