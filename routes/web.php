<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ChartController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('charts');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

Route::resource('/student', StudentController::class);
Route::resource('/course', CourseController::class);
Route::post('/documents/upload', [DocumentController::class, 'upload'])->name('documents.upload');
Route::resource('/document', DocumentController::class);
Route::post('/send-email', [MailController::class, 'sendEmail']);

Route::get('/display-charts', [App\Http\Controllers\ChartController::class, 'displayChart'])->name('charts');

require __DIR__.'/auth.php';

