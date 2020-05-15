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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba1', 'PruebaController@prueba1');

Route::get('/prueba2', 'PruebaController@prueba2');

Route::get('/prueba3', 'PruebaController@prueba3');

Route::get('/prueba4', 'PruebaController@prueba4');

Route::get('/prueba5', 'PruebaController@prueba5');

Route::post('/validacion', 'ValidacionController@store');

Route::get('/index', 'ValidacionController@index');
