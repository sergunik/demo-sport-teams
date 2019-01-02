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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('players',               '\App\API\Controllers\PlayerController@index');
Route::get('players/{player}',      '\App\API\Controllers\PlayerController@show');
Route::post('players',              '\App\API\Controllers\PlayerController@store');
Route::patch('players/{player}',    '\App\API\Controllers\PlayerController@update');
Route::delete('players/{player}',   '\App\API\Controllers\PlayerController@destroy');

Route::get('teams',                 '\App\API\Controllers\TeamController@index');
Route::get('teams/{team}',          '\App\API\Controllers\TeamController@show');
Route::post('teams',                '\App\API\Controllers\TeamController@store');
Route::patch('teams/{team}',        '\App\API\Controllers\TeamController@update');
Route::delete('teams/{team}',       '\App\API\Controllers\TeamController@destroy');
