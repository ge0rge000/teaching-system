<?php
namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Unit;
 
use Livewire\WithFileUploads;
class AdminEditUnitComponent extends Component
{
    use WithFileUploads;
    public $unit_id;
    public $year;//
    public $unit;//
    public $price;//
    public $short_desc;//
    
  public function mount($unit_id){
    $this->unit_id=$unit_id;
    $unit=Unit::where('id',$unit_id)->first();
    $this->unit_id=$unit->id;
    $this->price=$unit->regular_price;
    $this->unit=$unit->name;
    $this->year=$unit->year_type;
    $this->short_desc=$unit->short_description;
 
  }
    public function updateUnit(){

        $unit=Unit::find($this->unit_id);
        $unit->name=$this->unit;
        $unit->year_type=$this->year;
        $unit->short_description=$this->short_desc;
        $unit->regular_price=$this->price;

        $unit->save();
        session()->flash('message','unit is updated');
       
     
       
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-unit-component')->layout('layouts.base');
    }
}
