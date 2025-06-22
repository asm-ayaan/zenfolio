<?php

use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/** Frontend Routes */
Route::get('/', [HomeController::class, 'index'])->name('home');



/** Admin Routes */

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('hero-section', HeroController::class);
Route::resource('service-section', ServiceController::class);

require __DIR__.'/auth.php';
