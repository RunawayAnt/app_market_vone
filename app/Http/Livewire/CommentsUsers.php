<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CommentsUsers extends Component
{
    // public $product;
    public $pcomments;


    protected $listeners = ['activecomment'=>'render'];

    public function mount($product)
    {
        // $this -> product = $product;
        $this -> pcomments = Product::find($product -> id);
        $this -> pcomments->comments;
    }

    public function render()
    {

        return view('livewire.comments-users');
    }
}
