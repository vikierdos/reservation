<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/flights',[FlightController::class,'index']);
Route::get('/flights/{flight}',[FlightController::class,'show']);
Route::put('/flights/{flight}',[FlightController::class,'update']);
Route::post('/flights',[FlightController::class,'store']);
Route::delete('/flights/{flight}',[FlightController::class,'destroy']);

Route::get('/users',[UserContoller::class,'index']);
Route::get('/users/{user}',[UserContoller::class,'show']);
Route::put('/users/{user}',[UserContoller::class,'update']);
Route::post('/users',[UserContoller::class,'store']);
Route::delete('/users/{user}',[UserContoller::class,'destroy']);