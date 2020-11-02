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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/datasantri', App\Http\Controllers\DataSantriController::class);
Route::resource('/kelasbanin', App\Http\Controllers\KelasBaninController::class);
Route::resource('/kelassantribanin', App\Http\Controllers\KelasSantriBaninController::class);
Route::resource('/gurubanin', App\Http\Controllers\GuruBaninController::class);
Route::resource('/pengguna', App\Http\Controllers\UserController::class);
Route::resource('/configsystem', App\Http\Controllers\ConfigSystemController::class);
Route::resource('/mapelkelas', App\Http\Controllers\MapelKelasController::class);

Route::get('/tahunajaranlist', [ App\Http\Controllers\TahunAjaranController::class, 'tahunajaranlist']);
Route::get('/santribanin', [ App\Http\Controllers\DataSantriController::class, 'santribanin']);
Route::post('/loginsubmit', [App\Http\Controllers\AuthController::class, 'auth']);
Route::get('/userlist', [App\Http\Controllers\UserController::class, 'list']);
Route::get('/mapellist', [App\Http\Controllers\MapelController::class, 'list']);
