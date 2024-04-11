<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DocumentController;

Route::get('/', function () {
    return view('layout');
});

Route::resource('/student', StudentController::class);
Route::resource('/course', CourseController::class);
Route::post('/documents/upload', [DocumentController::class, 'upload'])->name('documents.upload');
