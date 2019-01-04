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
// Route::resource('shares', 'ShareController');
Route::get('getshares', array('as'=>'shares.index', 'uses'=>'ShareController@index'));  

// Route::post('postshares', 'ShareController@store');
// Route::delete('deleteshare', 'ShareController@destroy');
Route::delete('deleteshare/{id}',['as'=>'shares.destroy','uses'=>'ShareController@destroy']);    
Route::get('editshare/{id}', ['as'=>'shares.edit', 'uses'=>'ShareController@edit']);  
Route::put('update/{id}', ['as'=>'shares.update', 'uses'=>'ShareController@update']);  
Route::get('createshare', ['as'=>'shares.create', 'uses'=>'ShareController@create']);  
Route::post('postshares', ['as'=>'shares.store', 'uses'=>'ShareController@store']);  

