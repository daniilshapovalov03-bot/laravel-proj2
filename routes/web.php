<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PageController;

Route::get('/about', [PageController::class, 'about']);

use App\Http\Controllers\GameController;

Route::get('/games', [GameController::class, 'index'])->name('games.index');

Route::get('/games/{game}', [GameController::class, 'show'])->name('games.show');
