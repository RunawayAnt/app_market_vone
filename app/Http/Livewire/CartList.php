<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartList extends Component
{
    public $cartCollection, $subtotal, $total;

    protected $listerners = ['render'];

    public function render()
    {
        $this->cartCollection = \Cart::getContent();
        // $this->subTotal = \Cart::getSubTotal();
        // $this->total = \Cart::getTotal();

        return view('livewire.cart-list');
    }

    public function removeCart($id)
    {
        \Cart::remove($id);
        $this->emit('updatecart');
        session()->flash('success', 'Item has removed !');
    }
}
