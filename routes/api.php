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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

//amalan_yaumi
Route::apiResource('/amalan_yaumi', App\Http\Controllers\Api\AmalanYaumiController::class);

//berita
Route::apiResource('/berita', App\Http\Controllers\Api\BeritaController::class);

//doa
Route::apiResource('/doa', App\Http\Controllers\Api\DoaController::class);

//doa_detail
Route::apiResource('/doa_detail', App\Http\Controllers\Api\DoaDetailController::class);

//kutipan
Route::apiResource('/kutipan', App\Http\Controllers\Api\KutipanController::class);

//rencana_kegiatan
Route::apiResource('/rencana_kegiatan', App\Http\Controllers\Api\RencanaKegiatanController::class);

//wawasan_islami
Route::apiResource('/wawasan_islami', App\Http\Controllers\Api\WawasanIslamiController::class);