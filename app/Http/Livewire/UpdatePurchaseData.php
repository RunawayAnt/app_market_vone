<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;

class UpdatePurchaseData extends Component
{
    public $datapurchase;

    public $opentwo = false;

    public $names, $lastnames,  $dni, $phone, $district, $shippingaddress, $billingaddress;

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

    public function mount($datapurchase)
    {
        $this->datapurchase = $datapurchase;

        $this->names = $datapurchase->names;
        $this->lastnames = $datapurchase->lastnames;
        $this->dni = $datapurchase->dni;
        $this->phone = $datapurchase->phone;
        $this->district = $datapurchase->district;
        $this->shippingaddress = $datapurchase->default_shipping_address;
        $this->billingaddress = $datapurchase->billing_address;

    }

    public function updateData()
    {
        $this->validate();

        Profile::where('id', $this->datapurchase->id)->update([
            'names' => $this->names,
            'lastnames' => $this->lastnames,
            'dni' => $this->dni,
            'phone' => $this->phone,
            'district' => $this->district,
            'default_shipping_address' => $this->shippingaddress,
            'billing_address' => $this->billingaddress,
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
