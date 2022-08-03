<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarritoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "cliente_id"=>$this->faker->numberbetwwen(1,100),
            "producto_id"=>$this->faker->numberbetween(1,500),
            "cantidad"=>$this->faker->numberBetween(1,100),
        ];
    }
}
