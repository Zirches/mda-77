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
    return view('Times.create');
});



Route::get('Times/index', 'timesController@index')->name('WelcomeMDA');

Route::get('Times/test', 'timesController@test')->name('Test');

Route::get('Times/show', 'timesController@showTable')->name('ShowAct');

Route::get('Times', 'timesController@viewTables')->name('InsertAct');
Route::post('Times', 'timesController@timesActivity');


Route::delete('Times/show/{id}', 'timesController@activityDelete')->name('DeleteActivity');

Route::get('Times/edit/{id}', 'timesController@editBarcode')->name('EditLabel');
Route::put('Times/edit/{id}', 'timesController@updateBarcode')->name('UpdateBarcode');









