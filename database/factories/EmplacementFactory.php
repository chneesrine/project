<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmplacementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "Adresse"=>$this->faker->Address(),
            //
        ];
    }
}
