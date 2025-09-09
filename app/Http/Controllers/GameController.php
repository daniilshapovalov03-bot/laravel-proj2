<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Inertia\Inertia;

class GameController extends Controller
{
    public function index()
    {
        if (auth()->check() && auth()->user()->isAdmin()) {
            $games = Game::latest()->get();
        } else {
            $games = Game::available()->latest()->get();
        }
        return view('games.index', ['games'=>$games]);
    }

    public function show(Game $game)
    {
        return Inertia::render('Games/Show', [
            'game' => $game
        ]);
    }
}
