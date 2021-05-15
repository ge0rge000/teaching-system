<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\question;
class Trueans extends Model
{
    use HasFactory;
    protected $table="trueans";
    protected $fillable = ['user_id','choices','result'];

    public function question()
    {
        return $this->belongsTo(question::class,'question_id');
    }
}
