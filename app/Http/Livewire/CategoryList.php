<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;

class CategoryList extends Component
{
    // public $products;

    public $search;
    // public $activeBrand;
    public $sort = 'id';
    public $order = 'desc';

    public function render()
    {

        $products = Product::where('name', 'like', '%' . $this->search . '%')
            // ->when($this-> activeBrand, function($query){
            //     return $query->where('brand_id',$this-> activeBrand);
            // })
            ->orWhere('price', 'like', '%' . $this->search . '%')
            ->orderBy($this->sort, $this->order)
            ->get();

        $brands = Brand::limit(6)->get();

        return view('livewire.category-list', compact('products','brands'));
        // return view('livewire.search-posts');
    }

    
}
