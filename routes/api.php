<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DocumentController;
use Illuminate\Support\Facades\Route;

//login route
Route::post('/login', [AuthController::class, 'login']);

//dpocument routes
Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('documents/{id}', [DocumentController::class, 'downloadDocument']);
    Route::get('/documents', [DocumentController::class, 'index']);
});

