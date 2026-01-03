<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TaskController;
use App\Models\Task;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', [WelcomeController::class, 'sayHello']);
Route::get('/greet/{name}', [WelcomeController::class, 'greetPerson']);
Route::get('/tasks', [TaskController::class, 'index']);
Route ::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);
Route::patch('/tasks/{id}/toggle', [TaskController::class, 'toggleComplete']);

