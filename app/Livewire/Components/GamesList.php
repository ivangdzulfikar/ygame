<?php

namespace App\Livewire\Components;

use App\Models\Game;
use Livewire\Component;
use Livewire\WithPagination;

class GamesList extends Component
{
    use WithPagination;
    public $search;
    public Game $selectedGame;
    public $i = 1;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function gameDetail(Game $game)
    {
        $this->selectedGame = $game;
        $this->dispatch('open-modal', name : 'game-detail');
    }

    public function render()
    {
        $games = Game::latest()->where('title', 'like', "%$this->search%")->paginate(8);
        return view('livewire.components.games-list', [
            'games' => $games
        ]);
    }
}
