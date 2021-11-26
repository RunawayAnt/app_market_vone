<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartAdditem extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function render()
    {

        return view('livewire.cart-additem');
    }

    public function addItem()
    {
        \Cart::add([
            'id' => $this->product->id,
            'name' => $this->product->name,
            'price' => $this->product->price,
            'quantity' => 1,
            'attributes' => array(
                'image' => $this->product->image,
                'category' => $this->product->category->cname,
                'brand' => $this->product->brand->bname,
                'slug' => $this->product->slug
            )
        ]);
         $this->emit('render');
        $this->emit('alert', $this->product->name);
        session()->flash('success', 'Product is Added to Cart Successfully !');
    }
}
