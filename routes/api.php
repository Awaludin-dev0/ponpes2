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

Route::resource('/datasantri', App\Http\Controllers\DataSantriController::class);
Route::resource('/kelasbanin', App\Http\Controllers\KelasBaninController::class);
Route::resource('/kelassantribanin', App\Http\Controllers\KelasSantriBaninController::class);

Route::get('santribanin', [ App\Http\Controllers\DataSantriController::class, 'santribanin']);
