<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ForumController;

Route::get('/forum', [ForumController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MapController::class, 'index']);

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/about-us', function () {
    return view('about-us');
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