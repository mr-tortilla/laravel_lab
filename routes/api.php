<?php

use App\Http\Controllers\HealthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

Route::group(['prefix' => '/students'], function () {
    Route::get('/create', [StudentController::class, 'store']);
    Route::get('/update/{id}', [StudentController::class, 'update']);
    Route::get('/delete/{id}', [StudentController::class, 'destroy']);
    Route::get('/{id}', [StudentController::class, 'show']);
    Route::get('/', [StudentController::class, 'index']);
});
Route::group(['prefix' => '/teachers'], function () {
    Route::get('/create', [TeacherController::class, 'store']);
    Route::get('/update/{id}', [TeacherController::class, 'update']);
    Route::get('/delete/{id}', [TeacherController::class, 'destroy']);
    Route::get('/{id}', [TeacherController::class, 'show']);
    Route::get('/', [TeacherController::class, 'index']);
});

Route::get('/health_check', [HealthController::class, 'index']);