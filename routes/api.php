<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BookController;

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

Route::middleware('api')->group(function () {
    Route::get('fetchallbooks', [BookController::class, 'index']);
    Route::post('savebook', [BookController::class, 'store']);
    Route::get('singlebook/{id}', [BookController::class, 'edit']);
    Route::post('updateBook', [BookController::class, 'update']);
    Route::delete('deletebook/{id}', [BookController::class, 'destroy']);

    Route::get('groups', [BookController::class,'allGroups']);
});