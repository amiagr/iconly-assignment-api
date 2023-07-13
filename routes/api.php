<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\IconController;
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

Route::post('/login', [Auth::class, 'login']);

Route::get('/auth/google', [Auth::class, 'redirectToProvider']);
Route::get('/auth/google/callback', [Auth::class, 'handleProviderCallback']);

Route::prefix('/icons')->group(function () {
    Route::get('/', [IconController::class, 'index']);
    Route::post('/', [IconController::class, 'create']);
    Route::put('/{building}', [IconController::class, 'update']);
    Route::delete('/{building}', [IconController::class, 'destroy']);
});
