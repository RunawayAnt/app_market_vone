<?php

namespace App\Http\Livewire;

use App\Models\Shop;
use Livewire\Component;

class CommentsShopsList extends Component
{
    public $scomments;
    protected $listeners = ['activecommentshop'=>'render'];

    public function mount($shop)
    {
        // $this -> product = $product;
        $this -> scomments = Shop::find($shop -> id);
        $this -> scomments-> comments;
    }

    public function render()
    {
        return view('livewire.comments-shops-list');
    }
}
