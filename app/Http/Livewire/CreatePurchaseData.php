<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePurchaseData extends Component
{
    public $open = false;
    public $names, $lastnames,  $dni, $phone, $district, $shippingaddress, $billingaddress, $user_id;

    public $districtselect = [
        'Alto Laran',
        'El Carmen',
        'Chavin',
        'Chincha Alta',
        'Chincha Baja',
        'Grocio Prado',
        'Pueblo Nuevo',
        'San Juan de Yanac',
        'San Pedro de Huacarpana',
        'Sunampe',
        'Tambo de Mora'
    ];


    protected $rules = [
        'names' => 'required',
        'lastnames' => 'required',
        'dni' => 'required|max:9|alpha_num',
        'phone' => 'required|regex:/^(\+51)[0-9]{9}$/',
        'district' => 'required',
        'shippingaddress' => 'required|min:10',
        'billingaddress' => 'required|min:10',
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
            'district' => $this->district,
            'default_shipping_address' => $this->shippingaddress,
            'billing_address' => $this->billingaddress,
            'phone' => $this->phone,
            'user_id' => $this->user_id
        ]);

        $this->emit('saveDataUser', ['title' => 'Datos registrados correctamente!']);

        $this->reset('open', 'names', 'lastnames', 'dni', 'phone', 'district', 'shippingaddress', 'billingaddress');
    }

    public function restart()
    {
        // $set('open',false);
        $this->reset('open', 'names', 'lastnames', 'dni', 'phone', 'district', 'shippingaddress', 'billingaddress');
    }
    public function render()
    {
        return view('livewire.create-purchase-data');
    }
}
