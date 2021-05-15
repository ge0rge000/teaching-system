<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Unit;
class AdminUnitsComponent extends Component
{


    public function deleteunit($id){
        $question=Unit::find($id);
        $question->delete();
        session()->flash('message','unit has been deleted successfully');
    }
    public function render()
    {

        $unitsone=Unit::where('year_type',1)->get();
        $unitstwo=Unit::where('year_type',2)->get();
        $unitsthree=Unit::where('year_type',3)->get();  
        return view('livewire.admin.admin-units-component',compact('unitsone','unitstwo','unitsthree'))->layout('layouts.base');
    }
}
