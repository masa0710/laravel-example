<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

#追加
use App\Http\Controllers\ApiController;

Route::get('/students', [ApiController::class, 'getAllStudents']);
Route::post('/students', [ApiController::class, 'createStudent']);
Route::get('/students/{id}', [ApiController::class, 'getStudent']);
Route::put('/students/{id}', [ApiController::class, 'updateStudent']);
Route::delete('/students/{id}',[ApiController::class, 'deleteStudent']);
