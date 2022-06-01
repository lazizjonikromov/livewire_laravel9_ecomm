<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminOrderDetailsComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->$order_id = $order_id;
    }

    public function render()
    {
        return view('livewire.admin.admin-order-details-component')->layout('layouts.base');
    }
}
