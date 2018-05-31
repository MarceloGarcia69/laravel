<?php

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

Route::get('/proveedores', 'ProveedorController@listado');

Route::get('/ingreso', function () {
    return view('ingreso');
});
 /*esto es para que ingrese directamente al form de login
 Route::get('/', function () {
    return view('ingreso');
});
*/

