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

//API untuk tampil data
Route::get('/mahasiswa/read', 'MhsAPIController@read');

//API untuk create data
Route::post('/mahasiswa/create', 'MhsAPIController@create');

//API untuk update data
Route::post('/mahasiswa/update/{id}', 'MhsAPIController@update');

//API untuk delete data
Route::delete('/mahasiswa/delete/{id}', 'MhsAPIController@delete');

Route::post('/task/create', 'TaskAPIController@create');
Route::post('/task/read', 'TaskAPIController@read');
Route::post('/task/update/{id}', 'TaskAPIController@update');
Route::delete('/task/delete/{id}', 'TaskAPIController@delete');