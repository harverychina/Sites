<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/Articles', 'ArticlesController@index');
Route::get('/Articles/create', 'ArticlesController@create');
Route::get('/Articles/{id}','ArticlesController@show');
Route::post('/Articles','ArticlesController@store');
/*Route::any('/test', function (){
    return 'test';
});*/
