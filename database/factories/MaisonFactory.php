<?php

namespace Database\Factories;

use App\Models\Maison;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaisonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Maison::class ; 

    public function definition()
    {
        return [
            'addresse'=>$this->faker->unique->streetAddress  , 
            'prix'=>$this->faker->numberBetween(1500,7000), 
            'photo'=>$this->faker->name,
            'photo_interieur'=>$this->faker->name
        ];
    }
}
