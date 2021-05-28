<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
Route::post('/pegawai', 'App\Http\Controllers\PegawaiController@create');
Route::post('/pegawai/{id}', 'App\Http\Controllers\PegawaiController@update');
Route::delete('/pegawai/{id}', 'App\Http\Controllers\PegawaiController@delete');
Route::get('/pegawai/{id?}', 'App\Http\Controllers\PegawaiController@show');
