<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartTotal extends Component
{
    public $cartTotalQuantity;
    protected $listeners = ['render','updatecart' => 'render','itemUpdated' => 'render'];
    

    public function render()
    {
        $this -> cartTotalQuantity = \Cart::getTotalQuantity();
        return view('livewire.cart-total');
    }
}
