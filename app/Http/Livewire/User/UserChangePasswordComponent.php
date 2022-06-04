<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserChangePasswordComponent extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    public function updated($fields)
    {
        $this->validateOnly($fields , [
            'current_password'=>'required',
            'password'=>'required|min:8|confirmed|different:current_password'
        ]);
    }

    public function changePassword()
    {
        $this->validate([
            'current_password'=>'required',
            'password'=>'required|min:8|confirmed|different:current_password'
        ]);
    }

    public function render()
    {
        return view('livewire.user.user-change-password-component')->layout('layouts.base');
    }
}
