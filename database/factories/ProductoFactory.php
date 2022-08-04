<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre"=>$this->faker->name(),
            "descripcion"=>$this->faker->text(),
            "precio"=>$this->faker->numberBetween(1,9999),
            "cantidad"=>$this->faker->numberBetween(1,100),
            "foto"=>"/img/galleta_animalitos.jpg",
            //$this->faker->imageUrl('cats')",
        ];
    }
}
