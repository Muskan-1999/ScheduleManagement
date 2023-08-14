<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::get('/tasks/{task}/reschedule', [TaskController::class, 'reschedulepage'])->name('tasks.reschedule');
Route::patch('/tasks/{task}', [TaskController::class, 'reschedule'])->name('tasks.rescheduled');
Route::get('/tasks/{task}/complete', [TaskController::class, 'completepage'])->name('tasks.completepage');
Route::patch('/tasks/{task}', [TaskController::class, 'complete'])->name('tasks.complete');


