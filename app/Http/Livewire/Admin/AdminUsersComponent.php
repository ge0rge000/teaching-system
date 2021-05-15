<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminUsersComponent extends Component
{
    public $year_type;

    public function mount($year_type){
        $this->year_type=$year_type;
      
    }
    public function render()
    {
        $users=User::where('year_type',$this->year_type)->get();
   
        return view('livewire.admin.admin-users-component',['users'=>$users])->layout('layouts.base');
    }
}
