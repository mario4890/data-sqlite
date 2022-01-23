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

Route::prefix('people')->group(function () {;
    Route::get('/list', [\App\Http\Controllers\PeopleController::class, 'index']);
    Route::post('/add', [\App\Http\Controllers\PeopleController::class, 'create']);
    Route::delete('/delete', [\App\Http\Controllers\PeopleController::class, 'delete']);
});
