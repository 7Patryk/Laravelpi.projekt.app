<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('szmidt/310815')->group(function(){
    Route::get('people', [\App\Http\Controllers\PeopleController::class, 'index']);
    Route::post('people', [\App\Http\Controllers\PeopleController::class, 'create']);
    Route::get('people/{id}', [\App\Http\Controllers\PeopleController::class, 'read']);
    Route::put('people/{id}', [\App\Http\Controllers\PeopleController::class, 'update']);
    Route::delete('people/{id}', [\App\Http\Controllers\PeopleController::class, 'remove']);
});
