<?php

namespace App\Http\Controllers;

use App\Models\Game; // <-- Теперь мы используем нашу модель!
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return view('games.index', ['games' => $games]);
    }
    public function show(Game $game)
    {
        return view('games.show', ['game' => $game]);
    }
}
