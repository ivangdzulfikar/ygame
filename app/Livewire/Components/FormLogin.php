<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Livewire\Forms\UserForm;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class FormLogin extends Component
{
    #[Validate('required|min:3')]
    public $email;
    #[Validate('required')]
    public $password;

    public function submitLogin()
    {
        $validatedDate = $this->validate();

        // dd($validatedDate);
        
        if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
            session()->flash('loginsuccess', 'login susccess');
        }else{
            session()->flash('error', 'email and password are wrong.');
        }
    }

    public function render()
    {
        return view('livewire.components.form-login');
    }
}
