<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

Route:: get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/about', [PageController::class, 'about']);

Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/games/create', function () {
        return '<h1>Страница создания новой игры (видна только админу)<h1>';
    })->name('games.create');
});

