<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreate extends Component
{
    public $name, $email, $password, $password_confirm, $rol;

    public $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password'         => 'required|max:8',
        'password_confirm' => 'required|same:password',
        'rol'=> 'required'           // required and has to match the password field
    ];

    public function saveUser()
    {
        $this->validate();
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->assignRole($this->rol);
        $user->save();

        $this->emitTo('user-index','render');
        $this->emit('alertusers');

        $this->reset(['name','email','password','password_confirm','rol']);

    }


    public function render()
    {
        return view('livewire.admin.user-create');
    }
}
