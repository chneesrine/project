<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ApparielFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "Etat"=>1,
            "id"=>$this->faker->password(),
            //
        ];
    }
}
