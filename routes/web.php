<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

// Pages
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks/completed', [TaskController::class, 'completedTask'])->name('tasks.completed');
Route::get('/tasks/ongoing', [TaskController::class, 'ongoingTask'])->name('tasks.ongoing');
Route::get('/tasks/important', [TaskController::class, 'importantTask'])->name('tasks.important');

Route::put('/tasks/{task}/important', [TaskController::class, 'updateImportantTask'])->name('tasks.updateImportantTask');
Route::put('/tasks/{task}/completed', [TaskController::class, 'updateCompletedTask'])->name('tasks.updateCompletedTask');
