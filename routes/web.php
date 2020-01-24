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

// Route::get('fotos/{numero?}', function($numero = 'sin numero'){
// 	return 'Estas en la galeria de fotos:' .$numero;
// })->where('numero', '[0,9]+');

// Route::view('galeria', 'fotos', ['numero' =>125]);


Route::get('fotos', function(){
	return view('Layouts.app');
});
Route::get('Layouts/index', 'timesController@index')->name('WelcomeMDA');

Route::get('Layouts/create', 'timesController@showTable')->name('InsertAct');



// Route::view('galeria', 'fotos', ['numero' =>125]);



