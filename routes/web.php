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
Route::group(['prefix' => '/'], function() {
    Route::get('/', ['as' => 'people.index', 'uses' => 'PeopleController@index']);
    Route::get('/adicionar', ['as' => 'people.create', 'uses' => 'PeopleController@create']);
    Route::post('/', ['as' => 'people.store', 'uses' => 'PeopleController@store']);
});





