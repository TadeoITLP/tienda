<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->text(),
            'telefono' => $this->faker->phoneNumber(),
            'correo' => $this->faker->email(),
            'password' => bcrypt("123")
        ];
    }
}
