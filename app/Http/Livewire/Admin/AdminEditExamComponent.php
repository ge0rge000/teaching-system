<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\question;
use App\Models\Trueans;


class AdminEditExamComponent extends Component
{
    public $question;
    public $question_id;
    public $year;
    public $a;
    public $b;
    public $c;
    public $d;
    public $ans;
    public function mount($question_id){
        $this->question_id=$question_id;
        $question=question::where('id',$question_id)->first();
        $this->question_id=$question->id;
        $this->question=$question->question;
        $this->year=$question->year_type;
        $this->a=$question->a;
        $this->b=$question->b;
        $this->c=$question->c;
        $this->d=$question->d;
        $questionans=Trueans::where('question_id',$this->question_id)->first();
        $this->ans=$questionans->ans;

    }
    public function updateQuestion(){
        $question=question::find($this->question_id);
        $question->question=$this->question;
        $question->a=$this->a;
        $question->b=$this->b;
        $question->c=$this->c;
        $question->d=$this->d;
        $question->year_type=$this->year;
        $question->save();
        $trueans= Trueans::where('question_id',$this->question_id)->first();
        $trueans->ans=$this->ans;
        $trueans->save();
        session()->flash('message','question has been updated');

    }
    public function render()
    {
        return view('livewire.admin.admin-edit-exam-component')->layout('layouts.base');
    }
}
