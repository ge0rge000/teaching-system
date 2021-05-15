<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\User;
use App\Models\Unituser;
class AdminUnitUserComponent extends Component
{
    public $email;
    public $unitone;
    public $unittwo;
    public $unitthree;
    public $unitfour;
    public $unitfive;
    public $unitsix;
    public $unitseven;
    public $uniteight;
    public $unitnine;
    public $unitten;
    public $uniteleven;
    public $unittwelve;
    public $unitthriten;
    public $unitfourten;
    public $unitfiften;
    public $unitsixten;
    public function mount($email){
        $this->email=$email;
  
     }
     public function editCase(){
        $user=User::where('email',$this->email)->first();
        $id=$user->id;
         $unituser=Unituser::where('user_id',$id)->first();
         $unituserunitsupdate=Unituser::find($unituser->id);
         ////1,2,3,4
         if($this->unitone==null){
            $unituserunitsupdate->unitone=null;
         }else{
                       $unituserunitsupdate->unitone=$this->unitone;

         }
         if($this->unittwo==null){
            $unituserunitsupdate->unittwo=null;
         }else{
                       $unituserunitsupdate->unittwo=$this->unittwo;

         }
         if($this->unitthree==null){
            $unituserunitsupdate->unitthree=null;
         }else{
                       $unituserunitsupdate->unitthree=$this->unitthree;

         }
         if($this->unitfour==null){
            $unituserunitsupdate->unitfour=null;
         }else{
                       $unituserunitsupdate->unitfour=$this->unitfour;

         }
         ////5,6,7,8
         if($this->unitfive==null){
            $unituserunitsupdate->unitfive=null;
         }else{
                       $unituserunitsupdate->unitfive=$this->unitfive;

         }
         if($this->unitsix==null){
            $unituserunitsupdate->unitsix=null;
         }else{
                       $unituserunitsupdate->unitsix=$this->unitsix;

         }
         if($this->unitseven==null){
            $unituserunitsupdate->unitseven=null;
         }else{
                       $unituserunitsupdate->unitseven=$this->unitseven;

         }
         if($this->uniteight==null){
            $unituserunitsupdate->uniteight=null;
         }else{
                       $unituserunitsupdate->uniteight=$this->uniteight;

         }
         ////9.10.11.12
         if($this->unitnine==null){
            $unituserunitsupdate->unitnine=null;
         }else{
                       $unituserunitsupdate->unitnine=$this->unitnine;

         }
         if($this->unitten==null){
            $unituserunitsupdate->unitten=null;
         }else{
                       $unituserunitsupdate->unitten=$this->unitten;

         }
         if($this->uniteleven==null){
            $unituserunitsupdate->uniteleven=null;
         }else{
                       $unituserunitsupdate->uniteleven=$this->uniteleven;

         }
         if($this->unittwelve==null){
            $unituserunitsupdate->unittwelve=null;
         }else{
                       $unituserunitsupdate->unittwelve=$this->unittwelve;

         }
        
         ///13.14.15.16
         if($this->unitthriten==null){
            $unituserunitsupdate->unitthriten=null;
         }else{
                       $unituserunitsupdate->unitthriten=$this->unitthriten;

         }
         if($this->unitfourten==null){
            $unituserunitsupdate->unitfourten=null;
         }else{
                       $unituserunitsupdate->unitfourten=$this->unitfourten;

         }
         if($this->unitfiften==null){
            $unituserunitsupdate->unitfiften=null;
         }else{
                       $unituserunitsupdate->unitfiften=$this->unitfiften;

         }
         if($this->unitsixten==null){
            $unituserunitsupdate->unitsixten=null;
         }else{
                       $unituserunitsupdate->unitsixten=$this->unitsixten;

         }
          $unituserunitsupdate->save();
     }

    public function render()
    {
        $user=User::where('email',$this->email)->first();
        $id=$user->id;
         $unituser=Unituser::where('user_id',$id)->first();
         
        return view('livewire.admin.admin-unit-user-component',compact('unituser'))->layout('layouts.base');
    }
}
