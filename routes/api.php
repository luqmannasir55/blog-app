<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostApiController;
use App\Http\Controllers\AuthController;

Route::prefix('v1')->group(function () {

    // Public Routes
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::middleware('auth:sanctum')->group(function () {

        Route::get('/posts', [PostApiController::class, 'index']);
        Route::post('/posts', [PostApiController::class, 'store']);
        Route::get('/posts/{post}', [PostApiController::class, 'show']);
        Route::put('/posts/{post}', [PostApiController::class, 'update']);
        Route::delete('/posts/{post}', [PostApiController::class, 'destroy']);

        Route::post('/logout', [AuthController::class, 'logout']);

    });

});
