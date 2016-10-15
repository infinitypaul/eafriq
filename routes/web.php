<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ['as' => 'index', 'uses' => 'HomeController@getIndex']);
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@getHome']);
Route::get('/blank', ['as' => 'blank', 'uses' => 'HomeController@getBlank']);
Route::get('/form', ['as' => 'form', 'uses' => 'HomeController@getForm']);
Route::get('/table', ['as' => 'table', 'uses' => 'HomeController@getTable']);
Route::get('/tables', ['as' => 'tables', 'uses' => 'HomeController@getTables']);
Route::get('/pricing', ['as' => 'pricing', 'uses' => 'HomeController@getPricing']);
