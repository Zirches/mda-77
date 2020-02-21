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


Route::get('/', 'timesController@index');

Route::get('Times', 'timesController@viewTables')->name('InsertAct');
Route::post('Times', 'timesController@timesActivity');
Route::get('Times/index', 'timesController@index')->name('WelcomeMDA');
Route::get('Times/test', 'timesController@test')->name('Test');
Route::get('Times/show', 'timesController@showTable')->name('ShowAct');
Route::delete('Times/show/{id}', 'timesController@activityDelete')->name('DeleteActivity');
Route::get('Times/edit/{id}', 'timesController@activityEdit')->name('EditAct');
Route::put('Times/edit/{id}', 'timesController@updateActivity')->name('UpdateActivity');

Route::get('Proyect', 'TimesProyectController@viewTablesP')->name('InsertActP');
Route::post('Proyect', 'TimesProyectController@timesActivitiesP');
Route::get('Proyect/test', 'TimesProyectController@testP')->name('TestP');
Route::get('Proyect/show', 'TimesProyectController@showTableP')->name('ShowActP');
Route::delete('Proyect/show/{id}', 'TimesProyectController@ActivitiesDeleteP')->name('DeleteActivityP');
Route::get('Proyect/edit/{id}', 'TimesProyectController@ActivitiesEditP')->name('EditActP');
Route::put('Proyect/edit/{id}', 'TimesProyectController@updateActivitiesP')->name('UpdateActivityP');

Route::get('Developer', 'TimesDeveloperController@viewTablesD')->name('InsertActD');
Route::post('Developer', 'TimesDeveloperController@timesActivityD');
Route::get('Developer/test', 'TimesDeveloperController@testD')->name('TestD');
Route::get('Developer/show', 'TimesDeveloperController@showTableD')->name('ShowActD');
Route::delete('Developer/show/{id}', 'TimesDeveloperController@activityDeleteD')->name('DeleteActivityD');
Route::get('Developer/edit/{id}', 'TimesDeveloperController@activityEditD')->name('EditActD');
Route::put('Developer/edit/{id}', 'TimesDeveloperController@updateActivityD')->name('UpdateActivityD');
