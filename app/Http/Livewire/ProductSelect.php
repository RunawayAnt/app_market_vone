<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductSelect extends Component
{

    public $product, $features, $shop ,$brand, $category;


    public function mount($product)
    {
        $this   -> product = $product;
        $this   -> features =   $product -> features;
        $this   -> shop = $product -> shop;
        $this   -> brand = $product -> brand;
        $this   -> category = $product -> category;
    }

    public function render()
    {
        return view('livewire.product-select');
    }
}
