<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Arr;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserIndex extends Component
{
    public $heads = ['ID',   ['label' => 'Nombre', 'width' => 30], ['label' => 'Email', 'width' => 30], ['label' => 'Acciones', 'no-export' => true, 'width' => 40]];

    protected $listeners = ['render'];

    public $config = [];

    public $roles;
    public $users;
    public $bmans = [];


    public function mount()
    {

        // $this -> roles = Role::all();
        // $this -> users = User::with('roles')->get();
        // $this -> bmans = $this -> users -> reject(function ($user, $key){
        //     return $user->hasRole('Businessman');
        // });
        
        // foreach ($this->users as $key) {
        //     $this->bmans[] = $key->id;
        //     $this->bmans[] = $key->name;
        //     $this->bmans[] = $key->email;
        //     $this->bmans[] = '<nobr>'.$this->btnEdit.$this->btnDelete.$this->btnDetails.'</nobr>';
        // }


        $this->config = [
            'data' => [],
            'order' => [[1, 'asc']],
            'columns' => [null, null, null, null, ['orderable' => false]],
        ];
    }


    public function render()
    {

        $this->users = User::whereHas("roles", function ($q) {
            $q->where("name", "Businessman");
        })->get();

        return view('livewire.admin.user-index');
    }
}
