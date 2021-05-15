<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Auth;
use App\Models\Studen_exam;
use App\Models\question;
class Startexam extends Component
{



  

    public function render()
    {
        $question_numbers=question::where('year_type',Auth::user()->year_type)->select('exam_id')->distinct()->get();

        return view('livewire.user.startexam',compact('question_numbers'))->layout('layouts.base');
    }
}
