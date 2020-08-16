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

Route::get('/admin-api/{id}', 'Auth\LoginController@adminapi');
Route::get('/admin-api', 'Auth\LoginController@adminapi_show');
Route::post('/admin-api-store', 'Auth\LoginController@admin_store');
Route::put('/admin-update-api/{id}', 'Auth\LoginController@admin_api_update');
Route::delete('/admin-delete-api/{id}', 'Auth\LoginController@admin_api_delete');



// Route::get('/power-admin-api/{id}', 'Auth\LoginController@powerapi');

