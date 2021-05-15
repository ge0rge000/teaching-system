<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\question;
use App\Models\Trueans;

class AdminExamComponent extends Component
{

    public function deletequestion($id){
        $question=question::find($id);
        $question->delete();
        session()->flash('message','Category has been deleted successfully');
    }
    public function render()
    {

        $questionsone=question::where('year_type',1)->paginate(5);
        $questionstwo=question::where('year_type',2)->paginate(5);
        $questionsthree=question::where('year_type',3)->paginate(5);    
        return view('livewire.admin.admin-exam-component',compact('questionsone','questionstwo','questionsthree'))->layout('layouts.base');
    }
}
