<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/categories', 'App\Http\Controllers\CategoriesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
});

Route::middleware('locale')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('users', 'App\Http\Controllers\UsersController', ['only' => ['show', 'update', 'edit']]);
// Route::get('/users/{user}', 'App\Http\Controllers\UsersController@show')->name('users.show');
// Route::resource('categories', 'App\Http\Controllers\CategoriesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);
// Route::resource('categories', 'CategoriesController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);