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
Route::group(['prefix' => 'nba'],function () {

Route::get('/','TeamsController@index');
Route::get('/teams/{id}','TeamsController@show');
Route::get('/players/{playerId}','PlayersController@show');

Route::group(['prefix' => 'register'],function () {
    Route::get('/','RegisterController@create');
    Route::post('/', 'RegisterController@store');
});
Route::get('/logout', 'LoginController@logout');

});


Route::get('/', 'LoginController@index');
Route::post('/login', 'LoginController@login');
