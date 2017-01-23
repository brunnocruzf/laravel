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

Route::get('/', function () {
    return view('welcome');
});

route::get('client', 'ClientController@index');
route::post('client', 'ClientController@salva');
route::get('client/{id}', 'ClientController@busca');
route::delete('client/{id}', 'ClientController@deleta');