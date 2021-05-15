<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\question;
class ShowAllexam extends Component
{
    public function render()
    {

       
        return view('livewire.user.show-allexam')->layout('layouts.base');
    }
}
