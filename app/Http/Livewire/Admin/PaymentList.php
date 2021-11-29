<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payment;
use Livewire\Component;
use Livewire\WithFileUploads;


class PaymentList extends Component
{
    public $heads = ['ID',  ['label' => 'Nombre', 'width' => 20], ['label' => 'Seccion', 'width' => 30],['label' => 'Descripcion', 'width' => 20], ['label' => 'Acciones', 'no-export' => true, 'width' => 40]];

    protected $listeners = ['alertpayment'];

    public $config = [];

    public $payment;

    public function mount()
    {
        $this->config = [
            'data' => [],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, ['orderable' => false]],
        ];
    }


    public function render()
    {
        $this->payment = Payment::all();
        return view('livewire.admin.payment-list');
    }
}
