<?php

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

//posiciones
Route::get('/posiciones', [PosicioneController::class, 'index'])->middleware('auth')->name('posiciones.index');
Route::get('/posiciones/crear', [PosicioneController::class, 'create'])->middleware('auth')->name('posiciones.create');
Route::post('/posiciones/almacenar', [PosicioneController::class, 'store'])->middleware('auth')->name('posiciones.store');
Route::get('/posiciones/{posicione}/ver', [PosicioneController::class, 'show'])->middleware('auth')->name('posiciones.show');
Route::get('/posiciones/{posicione}/editar', [PosicioneController::class, 'edit'])->middleware('auth')->name('posiciones.edit');
Route::put('/posiciones/{posicione}/actualizar', [PosicioneController::class, 'update'])->middleware('auth')->name('posiciones.update');
Route::delete('/posiciones/{posicione}/delete', [PosicioneController::class, 'destroy'])->middleware('auth')->name('posiciones.destroy');