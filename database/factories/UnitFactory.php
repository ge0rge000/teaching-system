<?php

namespace Database\Factories;

use App\Models\Unit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class UnitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Unit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $unit_name=$this->faker->unique()->words($nb=4,$asText=true);
        $slug=Str::slug($unit_name);

        return [
            'name'=>$unit_name,
            'slug'=>$slug,
            'year_type'=> $this->faker->numberBetween(1,3),   
            'short_description'=>$this->faker->text(100),
            'regular_price'=>$this->faker->numberBetween(10,50),
            'sale_price'=>$this->faker->numberBetween(10,200),
            'pdf_words'=>'unit_'.$this->faker->unique()->numberBetween(1,100).'.pdf', 
            'pdf_grammer'=>'unit_'.$this->faker->unique()->numberBetween(1,100).'.pdf',  
            'video_words'=>'video_words'.$this->faker->unique()->numberBetween(1,100).'.mp4', 
            'video_grammer'=>'video_grammer'.$this->faker->unique()->numberBetween(1,100).'.mp4', 
            'image'=>'digital_'.$this->faker->unique()->numberBetween(1,22).'.jpg',


            'category_id'=>$this->faker->numberBetween(1,3),
        ];
    }
}
