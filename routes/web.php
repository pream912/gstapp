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

Route::resource('clients', 'ClientsController');

Route::get('/clients/file/{id}', 'ClientsController@fileReturn');
Route::put('/clients/file/{id}/returns', 'ClientsController@showReturns');

Route::resource('gstrs', 'GstrsController');

Route::post('/gstrs/view', 'GstrsController@index1');

Route::get('/gstrs/{gstr}/{ref}/gstr1', 'GstrsController@gstr1');
Route::get('/gstrs/{gstr}/gstr2', 'GstrsController@gstr2');
Route::get('/gstrs/{gstr}/gstr3', 'GstrsController@gstr3');

Route::put('/gstrs/{gstr}/{ref}/gsu1', 'GstrsController@store1');
Route::put('/gstrs/{gstr}/gsu2', 'GstrsController@store2');
Route::put('/gstrs/{gstr}/gsu3', 'GstrsController@store3');

Route::get('/gstrs/inactive/{id}/{ref}', 'GstrsController@setInactive');

Route::get('/settings', 'SettingsController@inactive');
Route::get('/settings/{id}', 'SettingsController@setActive');
