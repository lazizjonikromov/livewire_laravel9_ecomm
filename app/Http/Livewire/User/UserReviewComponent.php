<?php

namespace App\Http\Livewire\User;

use App\Models\OrderItem;
use Livewire\Component;

class UserReviewComponent extends Component
{
    public $order_item_id;
    public $rating;
    public $comment;

    public function mount($order_item_id)
    {
        $this->order_item_id = $order_item_id;
    }

    public function addReview()
    {
        $this->validate([

        ]);
    }

    public function render()
    {
        $orderItem = OrderItem::find($this->order_item_id);
        return view('livewire.user.user-review-component',['orderItem'=>$orderItem])->layout('layouts.base');
    }
}
