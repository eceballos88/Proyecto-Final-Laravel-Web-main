<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\coche_Controller;
use App\Http\Controllers\Reparaciones_Controller;
use App\Http\Controllers\mecanicosController;

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

Route::resource('Coche', coche_Controller::class);
Route::resource('Reparaciones', Reparaciones_Controller::class);
Route::resource('mecanico', mecanicosController::class);
//Route::get('mecanicodelete/{id?}',[mecanicosController::class, 'destroy']);
//Route::get('mecanicoedit/{id?}',[mecanicosController::class, 'update']);
Route::get('/venta', 'App\Http\Controllers\VentaController@index')->name('venta.index');
/* Route::get('/venta', [VentaController::class, 'create'])->name('venta.index'); */
/* CREACIÓN */
Route::get('/venta/create', 'App\Http\Controllers\VentaController@create')->name('venta.create');
Route::post('/venta', 'App\Http\Controllers\VentaController@store')->name('venta.store');
/* MODIFICACIÓN */
Route::get('/venta/{venta}/edit', 'App\Http\Controllers\VentaController@edit')->name('venta.edit');
Route::get('/venta/{venta}/read_only', 'App\Http\Controllers\VentaController@read_only')->name('venta.read_only');
Route::put('/venta/{venta}/update', 'App\Http\Controllers\VentaController@update')->name('venta.update');
/* ELIMINACIÓN */
Route::put('/venta/{venta}', 'App\Http\Controllers\VentaController@delete')->name('venta.delete');



Route::get('/', function () {
    return view('template.master');
});
