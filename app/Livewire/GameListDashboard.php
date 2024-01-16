<?php

namespace App\Livewire;

use App\Models\Game;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

#[Layout('layouts.dashboard')]
#[Title('List Game')]
class GameListDashboard extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search;
    public Game $selectedGame;
    public $i = 1;

    #[Validate('required|min:3|max:255')]
    public $title;
    #[Validate('required|min:3|max:255')]
    public $developer;
    #[Validate('required|numeric|min:2000')]
    public $year;
    #[Validate('nullable|sometimes|image|max:1024')]
    public $image;


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function gameDetail(Game $game)
    {
        $this->selectedGame = $game;
        $this->dispatch('open-modal', name : 'game-detail');
    }

    public function addGame()
    {
        $validate = $this->validate();

        // dd($validate);
        if ($this->image) {
            $validate['image'] = $this->image->store('img', 'public');
            
        }
        
        Game::create($validate);

        $this->reset('title', 'developer', 'year');

        session()->flash('success', 'Game hass been added succsessfully');
    }

    public function delete(Game $game)
    {
        $this->selectedGame = $game;
        $this->selectedGame->delete();
    }

    public function render()
    {
        $games = Game::latest()->where('title', 'like', "%$this->search%")->paginate(8);
        return view('livewire.game-list-dashboard', [
            'games' => $games
        ]);
    }
}
