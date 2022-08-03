<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "rfc"=>$this->faker->text(13),
            "nombre"=>$this->faker->firstName(),
            "Apellidos"=>$this->faker->lastName(),
            "puesto"=>$this->faker->jobTitle(),
            "departamento"=>$this->faker->text(100),
            "sueldo"=>$this->faker->numberBetween(1,999999),   
            "fotoId" =>$this->faker->imageUrl('person'),
            "direccion"=>$this->faker->address(),
            "telefono"=>$this->faker->phoneNumber(),
            "horario"=>$this->faker->time(),
        ];
    }
}
