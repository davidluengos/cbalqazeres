<?php

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

/* //Cofradías
Route::get('/cofradias', [CofradiaController::class, 'index'])->middleware('auth')->name('cofradias.index');
Route::get('/cofradias/crear', [CofradiaController::class, 'create'])->middleware('auth')->name('cofradias.create');
Route::post('/cofradias/almacenar', [CofradiaController::class, 'store'])->middleware('auth')->name('cofradias.store');
Route::get('/cofradias/{cofradia}/ver', [CofradiaController::class, 'show'])->middleware('auth')->name('cofradias.show');
Route::get('/cofradias/{cofradia}/editar', [CofradiaController::class, 'edit'])->middleware('auth')->name('cofradias.edit');
Route::put('/cofradias/{cofradia}/actualizar', [CofradiaController::class, 'update'])->middleware('auth')->name('cofradias.update');
Route::delete('/cofradias/{cofradia}/borrar', [CofradiaController::class, 'destroy'])->middleware('auth')->name('cofradias.destroy'); */

