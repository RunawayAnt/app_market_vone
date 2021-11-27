<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowPurchaseData extends Component
{
    public $user, $datapurchase;

    // public $open = false;

    protected $listeners = ['saveDataUser' => 'render'];

    public function mount()
    {
        $this -> user = Auth::user()->id;
        $this -> datapurchase = User::find($this -> user)->profile;
    }

    public function render()
    {
        $this -> datapurchase -> profile;
        return view('livewire.show-purchase-data');
    }
}
