<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Studen_exam;
use App\Models\User;
use Livewire\WithPagination;

class AdminResultsStudentComponent extends Component
{
    use WithPagination;

    public $year_type;
    public function mount($year_type){
        $this->year_type=$year_type;
    }

    public function render()
    {
        // $users_id=User::where('year_type',$this->year_type)->get()->pluck('id');
        // $results=Studen_exam::whereIn('user_id', $users_id)->get();
        $year_type  = $this->year_type;
        $results = Studen_exam::whereHas('user' , function ($q) use($year_type)
        {
           $q->where('year_type' , $year_type);
        })->get();




        return view('livewire.admin.admin-results-student-component',compact('results'))->layout('layouts.base');
    }
}
