<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;

Route::prefix('task')->middleware('auth')->group(function (){
    Route::get('/', action:[ToDoListController::class, 'index'])->name('todo.index');
    
    Route::get('/create', action:[ToDoListController::class, 'create'])->name('todo.create');
    
    Route::post('/store', action:[ToDoListController::class, 'store'])->name('todo.store');
    
    Route::get('/{todo}', action:[ToDoListController::class, 'show'])->name('todo.show');
    
    Route::get('/{todo}/edit', action:[ToDoListController::class, 'edit'])->name('todo.edit');
    
    Route::patch('/{todo}', action:[ToDoListController::class, 'update'])->name('todo.update');
    
    Route::delete('/{todo}', action:[ToDoListController::class, 'destroy'])->name('todo.destroy');
    });

Route::get('/', function () {
return view('welcome');
});

Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';