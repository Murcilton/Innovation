<?php

use App\Http\Controllers\Notification\NotificationController;
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
Route::prefix('v1/public')->group(function () {
    Route::controller(NotificationController::class)->group(function () {
        Route::post('/users/bot/validate-token/{token}', 'findToken');
        Route::get('/notifications/bot/{token}', 'show');
        Route::get('/notifications/bot/mark-read/{token}', 'updateOnApi');
    });
});

