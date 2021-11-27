<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;

class UpdatePurchaseData extends Component
{
    public $datapurchase;

    public $opentwo = false;

    public $names, $lastnames,  $dni, $phone, $address;

    protected $rules = [
        'names' => 'required',
        'lastnames' => 'required',
        'dni' => 'required|max:9|alpha_num',
        'phone' => 'required|regex:/^(\+51)[0-9]{9}$/',
        'address' => 'required'
    ];

    public function mount($datapurchase)
    {
        $this->datapurchase = $datapurchase;

        $this->names = $datapurchase->names;
        $this->lastnames = $datapurchase->lastnames;
        $this->dni = $datapurchase->dni;
        $this->phone = $datapurchase->phone;
        $this->address = $datapurchase->address;
    }

    public function updateData()
    {
        $this->validate();

        Profile::where('id', $this->datapurchase->id)->update([
            'names' => $this->names,
            'lastnames' => $this->lastnames,
            'dni' => $this->dni,
            'phone' => $this->phone,
            'address' => $this->address,
            'user_id' => $this->datapurchase->user_id
        ]);

        $this->emit('saveDataUser',['title' => 'Datos actualizados correctamente!']);

        $this->reset('opentwo');
    }

    public function render()
    {
        return view('livewire.update-purchase-data');
    }
}
