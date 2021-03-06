<?php

namespace App\View\Components;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\View\Component;

class Footer extends Component
{
    public $shops;
    public $sproducts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->shops = Shop::all();
        $this->sproducts = Product::select()->where('shop_id','=','1')->count();

        return view('components.footer');
    }
}
