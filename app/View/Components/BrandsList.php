<?php

namespace App\View\Components;

use App\Models\Brand;
use Illuminate\View\Component;

class BrandsList extends Component
{
    public $brands;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this -> brands = Brand::all();

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.brands-list');
    }
}
