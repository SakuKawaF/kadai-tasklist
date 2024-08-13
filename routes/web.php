<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [TasksController::class, 'index']);
Route::resource('tasks', TasksController::class);

Route::get('tasks/{id}', [TasksController::class, 'show']);
Route::post('tasks/ceate', [TasksController::class, 'store']);
Route::put('tasks/{id}', [TasksController::class, 'update']);
Route::delete('tasks/{id}', [TasksController::class, 'destroy']);

Route::get('tasks', [TasksController::class, 'index'])->name('tasks.index');
Route::get('tasks/create', [TasksController::class, 'create'])->name('tasks.create');
Route::get('tasks/{id}/edit', [TasksController::class, 'edit'])->name('tasks.edit');