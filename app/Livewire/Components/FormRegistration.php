<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\UserForm;

#[Layout('layouts.app')]
#[Title('Reistration')]
class FormRegistration extends Component
{
    public UserForm $userForm;

    public function createUser()
    {
        $this->userForm->store();

        session()->flash('success', 'User has been added');
    }

    public function render()
    {
        return view('livewire.components.form-registration');
    }
}
