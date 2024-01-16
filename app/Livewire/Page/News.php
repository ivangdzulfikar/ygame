<?php

namespace App\Livewire\Page;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.app')]
#[Title('News')]
class News extends Component
{
    public function render()
    {
        return view('livewire.page.news');
    }
}
