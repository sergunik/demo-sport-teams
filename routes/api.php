<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login',                '\App\API\Controllers\AuthController@login');

Route::get('players',               '\App\API\Controllers\PlayerController@index');
Route::get('players/{player}',      '\App\API\Controllers\PlayerController@show');

Route::get('teams',                 '\App\API\Controllers\TeamController@index');
Route::get('teams/{team}',          '\App\API\Controllers\TeamController@show');


Route::group(['middleware' => 'auth:api'], function() {
    Route::post('players',              '\App\API\Controllers\PlayerController@store');
    Route::patch('players/{player}',    '\App\API\Controllers\PlayerController@update');
    Route::delete('players/{player}',   '\App\API\Controllers\PlayerController@destroy');

    Route::post('teams',                '\App\API\Controllers\TeamController@store');
    Route::patch('teams/{team}',        '\App\API\Controllers\TeamController@update');
    Route::delete('teams/{team}',       '\App\API\Controllers\TeamController@destroy');
});
