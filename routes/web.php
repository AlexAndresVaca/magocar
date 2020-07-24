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


Route::get('/', 'PageController@index')->name('index');
Route::get('/lineas', 'PageController@lineas')->name('lineas');
Route::get('/producto', 'PageController@producto')->name('producto');
Route::get('/quienes_somos', 'PageController@quienes_somos')->name('quienes_somos');