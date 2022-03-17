<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Client::class ; 

    public function definition()
    {
        return [
            'nom'=>$this->faker->name(10),
            'prenom'=>$this->faker->lastName(10),
            'ville'=>$this->faker->city,
            'Tel'=>$this->faker->phoneNumber,
            'addresse'=>$this->faker->streetAddress
        ];
    }
}
