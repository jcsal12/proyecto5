<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;

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

Route::get('/', HomeController::class.'@getHome');


Route::get('/contacto', ContactoController::class.'@getIndex');

Route::get('/contacto/create', ContactoController::class.'@getCreate');

Route::get('/contacto/show/{id}', [ContactoController::class,'getShow']);

Route::get('/contacto/edit/{id}', ContactoController::class.'@getEdit');

//Route::post('/contacto', ContactoController::class.'@store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/contacto', function () {
    return view('contacto');
})->middleware(['auth'])->name('contacto');

require __DIR__.'/auth.php';
