<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\viewController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testing', function () {
    return view('tampilApiBarang');
});

Route::get('/testingtesttest', [viewController::Class, 'test']);
Route::get('/testingtestexample', [viewController::Class, 'example']);
// Route::get('/testingtestexo', [viewController::Class, 'get_data_from_api']);