<?php

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

Route::get('home', 'App\Http\Controllers\AdminController@home');
Route::resources([
	'Destinos'=>'App\Http\Controllers\DestinosController',
	'Pasajeros'=>'App\Http\Controllers\PasajerosController',
	'Viajes'=>'App\Http\Controllers\ViajesController',
	'Reserva'=>'App\Http\Controllers\ReservaController',
	'Unidades'=>'App\Http\Controllers\UnidadesController',
	'Metodos_de_pago'=>'App\Http\Controllers\metodoPagoController',
	'Servicios'=>'App\Http\Controllers\ServiciosController',
	'Gastos'=>'App\Http\Controllers\GastosController'
]);
Route::post('eliminareservas/{id}','App\Http\Controllers\ReservaController@eliminareservas')->name('eliminareservas');