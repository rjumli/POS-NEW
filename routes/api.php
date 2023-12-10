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

Route::get('/search', [App\Http\Controllers\ApiController::class, 'search']);
Route::post('/store', [App\Http\Controllers\ApiController::class, 'store']);
Route::get('/customers', [App\Http\Controllers\ApiController::class, 'customers']);
Route::get('/discounts', [App\Http\Controllers\ApiController::class, 'discounts']);
Route::get('/payments', [App\Http\Controllers\ApiController::class, 'payments']);