<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePurchaseData extends Component
{
    public $open = false;
    public $names, $lastnames,  $dni, $phone, $address, $user_id;

    protected $rules = [
        'names' => 'required',
        'lastnames' => 'required',
        'dni' => 'required|max:9|alpha_num',
        'phone' => 'required|regex:/^(\+51)[0-9]{9}$/',
        'address' => 'required'
    ];

    public function mount()
    {
        $this->user_id = Auth::user()->id;
    }

    public function saveData()
    {
        $this->validate();
        Profile::create([
            'names' => $this->names,
            'lastnames' => $this->lastnames,
            'dni' => $this->dni,
            'phone' => $this->phone,
            'address' => $this->address,
            'user_id' => $this->user_id
        ]);

        $this->emit('saveDataUser',['title' => 'Datos registrados correctamente!']);

        $this->reset('open','names', 'lastnames', 'dni', 'phone', 'address');

    }

    public function render()
    {
        return view('livewire.create-purchase-data');
    }
}
