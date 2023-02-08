<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function (){
Route::get('/task', action:'ToDoListController@index')->name('todo.index');

Route::get('/create', action:'ToDoListController@create')->name('todo.create');

Route::post('/task', action:'ToDoListController@store')->name('todo.store');

Route::get('/{todo}', action:'ToDoListController@show')->name('todo.show');

Route::get('/{todo}/edit', action:'ToDoListController@edit')->name('todo.edit');

Route::patch('/{todo}', action:'ToDoListController@update')->name('todo.update');

Route::delete('/{todo}', action:'ToDoListController@destroy')->name('todo.destroy');
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
