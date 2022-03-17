<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Film::class ; 

    public function definition()
    {
        return [
            
            'title' => $this->faker->sentence(2,true),
             'year' => $this->faker->year ,
             'description' =>$this->faker->paragraph() , 
        ];
    }
}
