<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\API\UsersController;

Route::group(['middleware' => 'api', 'namespace'  => 'App\Http\Controllers', 'prefix' => 'auth'], function ($router) {
    Route::post('login', [AuthController::class, 'login']); 
    Route::post('register', [AuthController::class, 'register']);  
    Route::post('logout', [AuthController::class, 'logout']); 
    Route::post('refresh', [AuthController::class, 'refresh']); 

    Route::resource('users', UsersController::class);
}); 