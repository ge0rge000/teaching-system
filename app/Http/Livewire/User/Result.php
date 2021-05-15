<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

use Livewire\WithPagination;
use App\Models\User;
use App\Models\Studen_exam;
use App\Models\question;
use Auth;

class Result extends Component
{

    use WithPagination;

    
    public function render()
    {
            $student_result=Studen_exam::latest()->first();

           
                
            return view('livewire.user.result',compact('student_result',))->layout('layouts.base');
    }
}
