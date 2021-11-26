<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FilterProducts extends Component
{
    public $products, $count;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($products, $count)
    {
        $this ->products= $products;
        $this ->count= $count;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.filter-products');
    }
}
