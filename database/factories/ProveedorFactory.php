<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "compania"=>$this->faker->company(),
            "direccion"=>$this->faker->streetAddress(),
            "ciudad"=>$this->faker->city(),
            "codigoPostal"=>$this->faker->postcode(),
            "pais"=>$this->faker->country(),
            "telefono"=>$this->faker->phoneNumber(),
            "nombreContacto"=>$this->faker->name(),
            "telefonoContacto"=>$this->faker->phoneNumber(),
            "email"=>$this->faker->email(),
        ];
    }
}
/*$table->string("idProducto",100)->unique();
$table->string("descripcionPromocion",100)->nullable();
$table->string("imagen",100)->nullable();
"nombrePromocion"=>$this->faker->name(),
"idProducto"=>$this->faker->name(),
"descripcionPromocion"=>$this->faker->text(),
"imagen"=>$this->faker->imageUrl('cats'),*/
