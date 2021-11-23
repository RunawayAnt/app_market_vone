<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductRating extends Component
{
   public $stock;
    /**
     * Create a new component instance.
     *
     * @return void
     */



    public function __construct($stock)
    {
        $this -> stock = $stock;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-rating');
    }
}
