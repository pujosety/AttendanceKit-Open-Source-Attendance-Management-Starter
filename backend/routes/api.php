<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/auth/login', \App\Http\Controllers\Api\AuthController::class . '@login');
Route::post('/auth/logout', \App\Http\Controllers\Api\AuthController::class . '@logout');

Route::middleware('auth:sanctum')->prefix('v1')->group(function () {
    Route::get('/user', \App\Http\Controllers\Api\UserController::class . '@me');

    Route::get('/attendances', \App\Http\Controllers\Api\AttendanceController::class . '@index');
    Route::post('/attendances/check-in', \App\Http\Controllers\Api\AttendanceController::class . '@checkIn');
    Route::post('/attendances/check-out', \App\Http\Controllers\Api\AttendanceController::class . '@checkOut');

    Route::get('/reports', \App\Http\Controllers\Api\ReportController::class . '@index');
    Route::post('/reports', \App\Http\Controllers\Api\ReportController::class . '@store');

    Route::get('/leaves', \App\Http\Controllers\Api\LeaveController::class . '@index');
    Route::post('/leaves', \App\Http\Controllers\Api\LeaveController::class . '@store');

    Route::get('/notifications', \App\Http\Controllers\Api\NotificationController::class . '@index');
    Route::patch('/notifications/{id}/read', \App\Http\Controllers\Api\NotificationController::class . '@markAsRead');

    Route::get('/profile', \App\Http\Controllers\Api\ProfileController::class . '@show');
    Route::patch('/profile', \App\Http\Controllers\Api\ProfileController::class . '@update');

    Route::get('/settings', \App\Http\Controllers\Api\SettingController::class . '@index');
});
