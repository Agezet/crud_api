<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('apibarang', [BarangController::class, 'index']);
Route::get('apibarang/{id}', [BarangController::class, 'show']);
Route::post('apibarang', [BarangController::class, 'store']);
Route::put('apibarang/{id}', [BarangController::class, 'update']);
Route::delete('apibarang/{id}', [BarangController::class, 'destroy']);
