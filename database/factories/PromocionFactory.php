<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PromocionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombrePromocion"=>$this->faker->name(),
            "idProducto"=>$this->faker->name(),
            "descripcionPromocion"=>$this->faker->text(),
            "imagen"=>$this->faker->imageUrl('cats'),
        ];
    }
}
