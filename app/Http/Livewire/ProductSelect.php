<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductSelect extends Component
{

    public $product, $features, $shop, $brand, $category;
    public $quantitycart  = 1;


    public function mount($product)
    {
        $this->product = $product;
        $this->features =   $product->features;
        $this->shop = $product->shop;
        $this->brand = $product->brand;
        $this->category = $product->category;

    }

    public function render()
    {
        return view('livewire.product-select');
    }

    public function addProduct()
    {
        \Cart::add([
            'id' => $this -> product -> id,
            'name' => $this -> product -> name,
            'price' => $this -> product -> price,
            'quantity' => intval($this->quantitycart),
            'attributes' => array(
                'image' => $this -> product -> image,
                'category' => $this -> product -> category -> cname,
                'brand' => $this -> product -> brand -> bname,
                'slug' => $this -> product -> slug
            )
        ]);
        $this -> reset('quantitycart');
        $this->emit('render');
        $this -> emit('alert',$this -> product -> name);
        session()->flash('success', 'Product is Added to Cart Successfully !');
    }

}
