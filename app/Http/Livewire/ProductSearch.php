<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductSearch extends Component
{
    public $query;
    public $products;

    public function mount()
    {
        $this->query = '';
        $this->products = '';
    }

    public function updatedQuery()
    {
        $this->products = Product::where('name', 'like', '%' . $this->query . '%')
            ->orWhere('price', 'like', '%' . $this->query . '%')
            ->limit(4)
            ->get();
    }

    public function render()
    {
        return view('livewire.product-search');
    }
}
