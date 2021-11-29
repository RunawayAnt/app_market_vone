<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payment;
use Livewire\Component;
use Livewire\WithFileUploads;


class PaymentCreate extends Component
{

    use WithFileUploads;

    public $image, $name, $description, $infoadditional, $sections;

    protected $rules = [
        'name' => 'required|string|max:100',
        'description' => 'required|string',
        'infoadditional' => 'required|string',
        'sections' => 'required|string',
        'image' => 'image|max:2048', // 2MB Max
    ];


    public function savePayment()
    {
        $this->validate();

        $logo = $this->image->store('logos');

        Payment::create([
            'name' => $this->name,
            'image' => $logo,
            'description' => $this->description,
            'sections' => $this->sections,
            'infoadditional' => $this->infoadditional
        ]);
        $this->reset(['name', 'image', 'description', 'sections', 'infoadditional']);
        $this->emit('alertpayment');
    }




    public function render()
    {
        return view('livewire.admin.payment-create');
    }
}
