<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UtilisateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->name(),
            'email'=>$this->faker->unique()->email(),
            'Filière'=>$this->faker->name(),
            'CIN'=>$this->faker->randomNumber(),
        ];
    }
}
