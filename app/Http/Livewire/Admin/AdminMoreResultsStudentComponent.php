<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Studen_exam;
use App\Models\question;

class AdminMoreResultsStudentComponent extends Component
{

    public $year_type;
    public $user_id;
    public $exam_id;
 
    

    public function mount($year_type,$user_id,$exam_id){
        $this->year_type=$year_type;
        $this->user_id=$user_id;
        $this->exam_id=$exam_id;
    }
    public function render()
    {

        $choices_details=Studen_exam::where('user_id',$this->user_id)->
        where('exam_id',$this->exam_id)->first();
 
 
        $questions=question::where('exam_id',$this->exam_id)->get();
 
     
 
        return view('livewire.admin.admin-more-results-student-component',compact('choices_details','questions'))->layout('layouts.base');
    }
}
