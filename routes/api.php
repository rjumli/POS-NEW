<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserApiResource;
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

// Route::post('/login', [App\Http\Controllers\AuthController::class, 'loginUser']);
// Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logoutUser']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return new UserApiResource($request->user());
});


// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('/search', [App\Http\Controllers\ApiController::class, 'search']);
//     Route::post('/store', [App\Http\Controllers\ApiController::class, 'store']);
//     Route::get('/lists', [App\Http\Controllers\ApiController::class, 'lists']);
// });