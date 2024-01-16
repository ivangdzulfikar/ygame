<?php

namespace App\Livewire\Page;

use App\Models\Game;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
#[Title('Home')]
class Home extends Component
{
    public $title = 'Home';

    public function render()
    {
        return view('livewire.page.home');
    }
}
