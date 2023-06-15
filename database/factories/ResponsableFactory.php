<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ResponsableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "NomPrénom"=>$this->faker->name(),
            "Numéro"=>$this->faker->integer(),
            "Email"=>$this->faker->email(),
            "Motdepasse"=>$this->faker->password(),
            //
        ];
    }
}
