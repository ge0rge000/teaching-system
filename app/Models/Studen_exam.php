<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\question;

class Studen_exam extends Model
{
    use HasFactory;  
      protected $table="studen_exams";

      protected $fillable=[ 'choices','user_id'];
      protected $casts = [
         
        'choices' => 'array',
    ];
      public function user()
      {
          return $this->belongsTo(User::class,'user_id');
      }
      public function questions()
      {
          return $this->belongsToMany(User::class,'exam_id');
      }
}
