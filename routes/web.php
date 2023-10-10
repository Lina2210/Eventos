<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {

    return view('welcome');
});

Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store'])->name('events.store');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
    Route::get('/eventoactual', 'App\Http\Controllers\EventController@eventoActual');
    Route::get('/eventoproximo', 'App\Http\Controllers\EventController@eventoproximo');
    Route::get('/eventosanteriores', 'App\Http\Controllers\EventController@eventosanteriores');
});




