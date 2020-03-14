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
Route::post('signup', 'ApiController@signup');

Route::post('login', 'ApiController@login');

Route::post('update_settings', 'ApiController@update_settings');

Route::post('invite_friend', 'InviteController@invite_friend');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
