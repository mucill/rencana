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

Route::filter('after', function($response)
{
    $response->header('Expires: Tue, 03 Jul 2001 06:00:00 GMT', 'bar');
});

Route::get('/', function() {
	return View::make('layout')->with(array('title'=>'Dashboard', 'script' => ''));
});

/* Tahun Routing */
Route::get('tahun', 				'TahunController@index');
Route::get('tahun/edit/{id}', 		'TahunController@edit');
Route::get('tahun/destroy/{id}', 	'TahunController@destroy');
Route::get('tahun/actived/{id}', 	'TahunController@actived');
Route::post('tahun/store', 			'TahunController@store');
Route::post('tahun/update/{id}', 	'TahunController@update');

/* Visi */
Route::get('visi', 					'VisiController@index');
Route::get('visi/edit/{id}', 		'VisiController@edit');
Route::get('visi/destroy/{id}', 	'VisiController@destroy');
Route::get('visi/actived/{id}', 	'VisiController@actived');
Route::post('visi/store', 			'VisiController@store');
Route::post('visi/update/{id}', 	'VisiController@update');

/* Misi */
Route::get('misi', 					'MisiController@index');
Route::get('misi/edit/{id}', 		'MisiController@edit');
Route::get('misi/destroy/{id}', 	'MisiController@destroy');
Route::get('misi/actived/{id}', 	'MisiController@actived');
Route::post('misi/store', 			'MisiController@store');
Route::post('misi/update/{id}', 	'MisiController@update');

/* Tujuan */
Route::get('misi', 					'MisiController@index');
Route::get('misi/edit/{id}', 		'MisiController@edit');
Route::get('misi/destroy/{id}', 	'MisiController@destroy');
Route::get('misi/actived/{id}', 	'MisiController@actived');
Route::post('misi/store', 			'MisiController@store');
Route::post('misi/update/{id}', 	'MisiController@update');
