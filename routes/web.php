<?php

use App\Http\Controllers\Front\AvisoLegalController;
use App\Http\Controllers\Front\CanteraController;
use App\Http\Controllers\Front\ClasificacionController;
use App\Http\Controllers\Front\HomeController;
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

Route::get('/administrador', function () {
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', HomeController::class)->name('front.home');
Route::get('/aviso-legal', AvisoLegalController::class)->name('front.avisolegal');
Route::get('/cantera', CanteraController::class)->name('front.cantera');
Route::get('/clasificacion', ClasificacionController::class)->name('front.clasificacion');

