<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

use App\Models\User;
use App\Models\question;
use App\Models\Trueans;


use App\Models\Studen_exam;
use Auth;
use Livewire\WithPagination;
class Exam extends Component
{
    use WithPagination;
    public $exam_id;
    public $array=[];

    public function mount($exam_id){
        $this->$exam_id=$exam_id;

    }
    public function check(){
        $array=$this->array;
        $result=0;
        foreach ($array as $key=>$value) {
        $choice_true=Trueans::where('question_id',$key)->first();
        $true_choice=$choice_true->ans;
        if($true_choice==$value){
            $result++;
        }
        }
            $result_update=new Studen_exam();
            $result_update->user_id=Auth::user()->id;
            $result_update->exam_id=$this->exam_id;
             $result_update->choices=$array;
             $result_update->result=$result;
            $result_update->save();
        return redirect()->route('result.exam');
    
        
}

  public function render()
    {
  
    
       
        
        
        if( Studen_exam::where('exam_id',$this->exam_id)->where('user_id',Auth::user()->id)->exists()){
            session()->flash('message','you entered before this exam to exam another you should contact with Mr.Mena');
            return view('livewire.user.exam',)->layout('layouts.base');

        }
        else{
            $qustions=question::where('year_type', Auth::user()->year_type)->where('exam_id', $this->exam_id)->get();
        
            return view('livewire.user.exam', ['qustions'=>$qustions,])->layout('layouts.base');
        }
    }
}
