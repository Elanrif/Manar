<?php

namespace Database\Factories;

use App\Models\MaisonProprietaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaisonProprietaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = MaisonProprietaire::class ; 

    public function definition()
    {
        return [
           // 'maison_id'=>$this->faker->unique->numberBetween(1,40) ,
           // 'Etat'=>$this->faker->sentence(2,true) ,
        ];
    }
}
