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
Auth::routes(['verify' => true]);
Route::group(['prefix' => 'nba'],function () {

    Route::get('/','TeamsController@index');
    Route::get('/teams/{id}','TeamsController@show');
    Route::get('/players/{playerId}','PlayersController@show')->middleware('auth');

    Route::get('/forbidden-comment', 'CommentsController@forbidden');
    Route::post('/comment/{teamId}','CommentsController@store');

    Route::group(['prefix' => 'register'],function () {
        Route::get('/','RegisterController@create');
        Route::post('/', 'RegisterController@store');
    });
    Route::get('/logout', 'LoginController@logout');

});

//Redirecting Unauthenticated Users
//OVIM  ->name('login') GADJAM NAME U Middleware Authenticate redirectTo()

Route::get('/', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login')->middleware('myverified');

Route::post('/verified', 'LoginController@verify');
Route::get('/news', 'NewsesController@index');
Route::get('/news/{id}', 'NewsesController@show');
