<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\question;
use App\Models\Trueans;

class AdminAddExamComponent extends Component
{

    public $question;
    public $year;
    public $a;
    public $b;
    public $c;
    public $d;
    public $exam_id;
    public $ans;

    
    public function storeQuestion()
    {
        $question=new question();
        $question->question=$this->question;

        $question->exam_id=$this->exam_id;
        $question->a=$this->a;
        $question->b=$this->b;
        $question->c=$this->c;
        $question->d=$this->d;
        $question->year_type=$this->year;
        $question->save();
        $question_id = question::latest()->first()->id;
        $trueans=new Trueans();
        $trueans->question_id=$question_id;
        $trueans->ans=$this->ans;
        $trueans->save();
        session()->flash('message','question has been added');

    }


    
    
    public function render()
    {
        return view('livewire.admin.admin-add-exam-component')->layout('layouts.base');
    }
}
