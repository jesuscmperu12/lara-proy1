<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Str;
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
	/*$title="Hola mundo";
	$title= Str::plural($title);
	$title= Str::upper($title);
	dd($title);*/
    return view('welcomes');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function()
{
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('expediente', 'ExpedienteController@index')->name('expediente');
	Route::post('expediente', 'ExpedienteController@add');
});
