<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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

// Route::get('/index', [TasksController::class, 'tasks.index'])->middleware(['guest'])->name('tasks.index'); // changed by mentor
// Route::get('/register', [TasksController::class, 'register'])->middleware(['guest'])->name('register'); // changed by mentor
// Route::get('/login', [TasksController::class, 'login'])->middleware(['guest'])->name('login'); // changed by mentor

// Route::get('/store', [TasksController::class, 'store'])->middleware(['auth'])->name('store'); // changed by mentor
// Route::get('/show', [TasksController::class, 'show'])->middleware(['auth'])->name('show'); // changed by mentor
Route::get('/dashboard', function () {
    return redirect('/');
});
Route::middleware('auth')->group(function () {
    Route::resource('tasks', TasksController::class); // changed by mentor
    // Route::resource('tasks', TasksController::class, ['only' => ['tasks.index', 'tasks.show', 'tasks.destroy', 'tasks.edit', 'tasks.store']]); // changed by mentor
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    //Route::resource('task', TasksController::class, ['only' => ['store', 'destroy']]);
});

require __DIR__.'/auth.php';
