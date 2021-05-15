<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Unit extends Model
{
    use HasFactory;
    protected $table="units";
    protected $fillable=[ 'name','user_id','year_type'
                        ,'short_description','regular_price',
                    'pdf_words','pdf_grammer','video_words'
                ,'video_grammer','image'];


    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

}
