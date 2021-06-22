<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PemesananController;

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

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/{id}', [BarangController::class, 'show']);
Route::post('/barang', [BarangController::class, 'create']);
Route::put('/barang/{id}', [BarangController::class, 'update']);
Route::delete('/barang/{id}', [BarangController::class, 'delete']);

Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/{id}', [SupplierController::class, 'show']);
Route::post('/supplier', [SupplierController::class, 'create']);
Route::put('/supplier/{id}', [SupplierController::class, 'update']);
Route::delete('/supplier/{id}', [SupplierController::class, 'delete']);

Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/{id}', [PemesananController::class, 'show']);
Route::post('/pemesanan', [PemesananController::class, 'create']);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update']);
Route::delete('/pemesanan/{id}', [PemesananController::class, 'delete']);



// Route::get('/pegawai/{id?}', 'App\Http\Controllers\PegawaiController@show');
// Route::post('/pegawai/{id}', 'App\Http\Controllers\PegawaiController@update');
// Route::delete('/pegawai/{id}', 'App\Http\Controllers\PegawaiController@delete');