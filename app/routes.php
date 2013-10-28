<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
	return View::make('layout')->with(array('title'=>'Dashboard'));
});

/* Tahun Routing */
Route::get('tahun', 				'TahunController@index');
Route::get('tahun/edit/{id}', 		'TahunController@edit');
Route::get('tahun/destroy/{id}', 	'TahunController@destroy');
Route::post('tahun/store', 			'TahunController@store');
Route::post('tahun/update/{id}', 	'TahunController@update');
Route::get('tahun/actived/{id}', 	'TahunController@actived');

/* Tahun Routing */
Route::get('visi', 					'VisiController@index');
Route::get('visi/edit/{id}', 		'VisiController@edit');
Route::get('visi/destroy/{id}', 	'VisiController@destroy');
Route::post('visi/store', 			'VisiController@store');
Route::post('visi/update/{id}', 	'VisiController@update');
Route::get('visi/actived/{id}', 	'VisiController@actived');
