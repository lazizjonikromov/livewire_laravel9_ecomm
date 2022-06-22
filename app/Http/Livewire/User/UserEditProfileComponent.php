<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserEditProfileComponent extends Component
{
    public $name;
    public $email;
    public $mobile;
    public $image;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $newimage;

    public function render()
    {
        return view('livewire.user.user-edit-profile-component')->layout('layouts.base');
    }
}
