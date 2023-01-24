<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\LoginController;

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

Route::post('v1/login', [LoginController::class, 'authenticate']);

// api/v1
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1', 'middleware' => 'auth:sanctum'], function(){
    Route::apiResource('users', \App\Http\Controllers\Api\V1\UserController::class);
    Route::apiResource('payments', \App\Http\Controllers\Api\V1\PaymentController::class);
    Route::apiResource('travel-payments', \App\Http\Controllers\Api\V1\TravelPaymentController::class);
    Route::apiResource('payment-approvals', \App\Http\Controllers\Api\V1\PaymentApprovalController::class);
});
