<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([
    'middleware' => ['auth:sanctum'],
    'prefix' => 'car',
    'as' => 'car'
], function () {
    Route::get("/car", [CarController::class, 'index']);
    Route::post("/car", [CarController::class, 'store']);
});
