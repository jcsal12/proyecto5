<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
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

Route::get('/', HomeController::class.'@getHome');

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/servicios', ProductoController::class.'@getIndex');

Route::get('/servicios/create', ProductoController::class.'@getCreate');

Route::get('/servicios/show/{id}', ProductoController::class.'@getShow');

Route::get('/servicios/edit/{id}', ProductoController::class.'@getEdit');

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

