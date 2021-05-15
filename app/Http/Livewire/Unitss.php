<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Unit;
use Auth;
use\Livewire\WithPagination;
class Unitss extends Component
{
    use WithPagination;
    public function render()
    {
       
      
        $units=Unit::where('year_type', Auth::user()->year_type)->get();
     
       

        return view('livewire.unitss',compact('units',))->layout('layouts.base');
    }
}
