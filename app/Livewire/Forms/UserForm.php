<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class UserForm extends Form
{
    #[Validate('min:5|max:255|required')]
    public $username;
    
    #[Validate('min:5|max:255|required')]
    public $password;

    #[Validate('min:5|max:255|required')]
    public $name;

    #[Validate('min:5|max:255|required')]
    public $email;

    public function store() 
    {
        
        $validated = $this->validate();

        User::create($validated);
        
        $this->reset('name', 'email','password', 'username');
    }

}
