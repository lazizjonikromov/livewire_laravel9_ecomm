<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddProductComponent extends Component
{
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component', ['categories'=>$categories])->layout('layouts.base');
    }
}
