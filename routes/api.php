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


Route::post('user', 'API\UserController@storeUser')->name('storeUser');
Route::post('user/{id}', 'API\UserController@updateUser')->name('updateUser');
Route::delete('user/{id}', 'API\UserController@deleteUser')->name('deleteUser');

Route::post('agent', 'API\AgentController@storeAgent')->name('storeAgent');
Route::post('agent/{agentId}', 'API\AgentController@updateAgent')->name('updateAgent');
Route::delete('agent/{agentId}', 'API\AgentController@deleteAgent')->name('deleteAgent');

Route::get('user/{id}', 'API\UserController@getUser')->name('getUser');
