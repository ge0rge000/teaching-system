<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class HomeComponent extends Component

{
    public function render()
    {
        $users=User::all();


        return view('livewire.home-component',compact('users'))->layout('layouts.base');
    }
}
