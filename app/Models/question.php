<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trueans;
use App\Models\Studen_exam;


class question extends Model
{
    use HasFactory;
    protected $table="questions";
    protected $fillable = ['ans'];
    public function trueans()
    {
        return $this->hasone(Trueans::class);
    }
     
    public function stdent_state()
    {
        return $this->belongsToMany(Studen_exam::class);
    }

}
