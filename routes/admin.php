<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\PosicioneController;
use App\Http\Controllers\RoleController;
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

/* Route::get('/', function () {
    return view('auth.login');
}); */

//Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Roles
Route::get('/roles', [RoleController::class, 'index'])->middleware('auth')->name('roles.index');
Route::get('/roles/crear', [RoleController::class, 'create'])->middleware('auth')->name('roles.create');
Route::post('/roles/almacenar', [RoleController::class, 'store'])->middleware('auth')->name('roles.store');
Route::get('/roles/{role}/ver', [RoleController::class, 'show'])->middleware('auth')->name('roles.show');
Route::get('/roles/{role}/editar', [RoleController::class, 'edit'])->middleware('auth')->name('roles.edit');
Route::put('/roles/{role}/actualizar', [RoleController::class, 'update'])->middleware('auth')->name('roles.update');
Route::delete('/roles/{role}/delete', [RoleController::class, 'destroy'])->middleware('auth')->name('roles.destroy');

//Posiciones
Route::get('/posiciones', [PosicioneController::class, 'index'])->middleware('auth')->name('posiciones.index');
Route::get('/posiciones/crear', [PosicioneController::class, 'create'])->middleware('auth')->name('posiciones.create');
Route::post('/posiciones/almacenar', [PosicioneController::class, 'store'])->middleware('auth')->name('posiciones.store');
Route::get('/posiciones/{posicione}/ver', [PosicioneController::class, 'show'])->middleware('auth')->name('posiciones.show');
Route::get('/posiciones/{posicione}/editar', [PosicioneController::class, 'edit'])->middleware('auth')->name('posiciones.edit');
Route::put('/posiciones/{posicione}/actualizar', [PosicioneController::class, 'update'])->middleware('auth')->name('posiciones.update');
Route::delete('/posiciones/{posicione}/delete', [PosicioneController::class, 'destroy'])->middleware('auth')->name('posiciones.destroy');

//Categorías
Route::get('/categorias', [CategoriaController::class, 'index'])->middleware('auth')->name('categorias.index');
Route::get('/categorias/crear', [CategoriaController::class, 'create'])->middleware('auth')->name('categorias.create');
Route::post('/categorias/almacenar', [CategoriaController::class, 'store'])->middleware('auth')->name('categorias.store');
Route::get('/categorias/{categoria}/ver', [CategoriaController::class, 'show'])->middleware('auth')->name('categorias.show');
Route::get('/categorias/{categoria}/editar', [CategoriaController::class, 'edit'])->middleware('auth')->name('categorias.edit');
Route::put('/categorias/{categoria}/actualizar', [CategoriaController::class, 'update'])->middleware('auth')->name('categorias.update');
Route::delete('/categorias/{categoria}/delete', [CategoriaController::class, 'destroy'])->middleware('auth')->name('categorias.destroy');

//Géneros
Route::get('/generos', [GeneroController::class, 'index'])->middleware('auth')->name('generos.index');
Route::get('/generos/crear', [GeneroController::class, 'create'])->middleware('auth')->name('generos.create');
Route::post('/generos/almacenar', [GeneroController::class, 'store'])->middleware('auth')->name('generos.store');
Route::get('/generos/{genero}/ver', [GeneroController::class, 'show'])->middleware('auth')->name('generos.show');
Route::get('/generos/{genero}/editar', [GeneroController::class, 'edit'])->middleware('auth')->name('generos.edit');
Route::put('/generos/{genero}/actualizar', [GeneroController::class, 'update'])->middleware('auth')->name('generos.update');
Route::delete('/generos/{genero}/delete', [GeneroController::class, 'destroy'])->middleware('auth')->name('generos.destroy');

//Equipos
Route::get('/equipos', [EquipoController::class, 'index'])->middleware('auth')->name('equipos.index');
Route::get('/equipos/crear', [EquipoController::class, 'create'])->middleware('auth')->name('equipos.create');
Route::post('/equipos/almacenar', [EquipoController::class, 'store'])->middleware('auth')->name('equipos.store');
Route::get('/equipos/{equipo}/ver', [EquipoController::class, 'show'])->middleware('auth')->name('equipos.show');
Route::get('/equipos/{equipo}/editar', [EquipoController::class, 'edit'])->middleware('auth')->name('equipos.edit');
Route::put('/equipos/{equipo}/actualizar', [EquipoController::class, 'update'])->middleware('auth')->name('equipos.update');
Route::delete('/equipos/{equipo}/delete', [EquipoController::class, 'destroy'])->middleware('auth')->name('equipos.destroy');