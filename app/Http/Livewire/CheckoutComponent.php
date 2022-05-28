<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CheckoutComponent extends Component
{
    public $ship_to_different;

    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;

    public function render()
    {
        return view('livewire.checkout-component')->layout("layouts.base");
    }
}
