<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowProductsClient extends Component
{
    public $opentwo = false;
    public $products;



    public function mount($item){

        // $this->products = DB::select('select * from order_product where id = ?');
        $this->products = $item -> products;

    }



    public function render()
    {
        return view('livewire.show-products-client');
    }
}
