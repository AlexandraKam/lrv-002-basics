<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/todo', [\App\Http\Controllers\ToDoController::class, 'index'])->name('todo.index');

Route::get('/todo/create', [\App\Http\Controllers\ToDoController::class, 'create'])->name('todo.create');

Route::get('/todo/{id}', [\App\Http\Controllers\ToDoController::class, 'show'])->name('todo.show');

Route::post('/todo/store', [\App\Http\Controllers\ToDoController::class, 'store'])->name('todo.store');
