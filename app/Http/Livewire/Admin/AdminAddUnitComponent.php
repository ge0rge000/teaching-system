<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


use Livewire\WithFileUploads;
class AdminAddUnitComponent extends Component
{

    use WithFileUploads;

    public $year;//
    public $unit;//
    public $price;//
    public $image;//
    public $pdf_words;
    public $pdf_grammer;
    public $words_video;
    public $video_grammer;
    public $short_desc;//
    
  
    public function storeUnit(){
       

 

       
       
        $this->validate([
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'pdf_words' => 'required|mimes:csv,txt,xlx,xls,pdf', // 1MB Max
            'pdf_grammer' =>  'required|mimes:csv,txt,xlx,xls,pdf', // 1MB Max
            'words_video'  => 'required',
            'video_grammer'  => 'required',

            ]);

          
        $unit =new Unit();

        $unit->name=$this->unit;
        $unit->year_type=$this->year;
        $unit->category_id=$this->year;
        $unit->regular_price=$this->price;
            $parts_words=explode('/d/', $this->words_video);
            $parts_words_two=explode('/view',$parts_words[1]);
            $parts_words_two_zero=$parts_words_two[0];
         $unit->video_words="https://drive.google.com/uc?export=download&id=$parts_words_two_zero";

     
       $imageName=time().'.'.$this->image->getClientOriginalName();
     
        $this->image->storeAs('public/images',$imageName);
        $unit->image=$imageName;
    
     
         ///pdf words///////////////
        $pdf_words_name=time().'.'.$this->pdf_words->getClientOriginalName();
      
        $this->pdf_words->storeAs('public/pdf/words',$pdf_words_name);
        $unit->pdf_words=$pdf_words_name;
         ////pdf grammer///////////////////
         $pdf_grammer_name=time().'.'.$this->pdf_grammer->getClientOriginalName();
      
         $this->pdf_grammer->storeAs('public/pdf/grammer',$pdf_grammer_name);
         $unit->pdf_grammer=$pdf_grammer_name;
        
         $parts_grammer=explode('/d/',$this->video_grammer );
         $parts_grammer_two=explode('/view',$parts_grammer[1]);
         $parts_grammer_two_zero=$parts_grammer_two[0];
         $unit->video_grammer="https://drive.google.com/uc?export=download&id=$parts_grammer_two_zero";

        $unit->short_description=$this->short_desc;

              $unit->save();
            session()->flash('message','unit is added');
         
                
            
       
    }
    public function render()
    {
        return view('livewire.admin.admin-add-unit-component')->layout('layouts.base');
    }
}
