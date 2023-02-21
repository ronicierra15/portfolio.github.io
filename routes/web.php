<?php

use App\Http\Controllers\ClienteController;
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

// Route::get('/', function () {
//     return '<h1>Hola mundo</h1>';
// });

// Route::get('index', 'ClienteController@index');
// Route::post('create', 'ClienteController@store');

Route::resource('clientes', ClienteController::class);
Route::resource('clientes.create', ClienteController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('clientes.{id}', ClienteController::class);
Route::resource('clientes.{id},edit', ClienteController::class);
Route::resource('clientes.{id}', ClienteController::class);
Route::resource('clientes.{id}', ClienteController::class);
