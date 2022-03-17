<?php

namespace Database\Factories;

use App\Models\Proprietaire;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProprietaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Proprietaire::class ; 

    public function definition()
    {
        return [
            'nom'=>$this->faker->name,
            'prenom'=>$this->faker->lastName,
            'addresse'=>$this->faker->unique->streetAddress,
            'Tel'=>$this->faker->unique->phoneNumber
        ];
    }
}
