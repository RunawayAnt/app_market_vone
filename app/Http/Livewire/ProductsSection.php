<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductsSection extends Component
{
    public $newproducts;

    public $offproducts;

    public function mount()
    {
        $this->newproducts = Product::select()
            ->limit(10)
            ->orderBy('id', 'asc')
            ->get();

        $this->offproducts = Product::select()
        ->where('price','<',50)
            ->limit(10)
            ->orderBy('id', 'asc')
            ->get();
    }

    public function render()
    {
        return view('livewire.products-section');
    }
}
