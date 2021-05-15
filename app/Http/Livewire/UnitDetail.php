<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Unit;
use App\Models\Unituser;
use App\Models\User;
use Auth;

class UnitDetail extends Component
{
     public $name;
     public $year_type;

    
    public function mount($name,$year_type)
    {

        $this->name=$name;
      
        $this->year_type=$year_type;
    }
    public function render()
    {
        $userId = Auth::id();
        $userstatus=Auth::user()->utype;
         
        $unit=Unit::where('name',$this->name)->where('year_type',$this->year_type)->first();
        
        $unituser=Unituser::where('user_id',$userId)->first();
     

        return view('livewire.unit-detail',compact('unit','unituser','userstatus'))->layout('layouts.base');
    }
}
