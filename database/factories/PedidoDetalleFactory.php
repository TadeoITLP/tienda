<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoDetalleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "pedido_id" => $this->faker->unique()->numberBetween(1,9999),
            "producto_id" => $this->faker->numberBetween(1,9999),
            "cantidad" => $this->faker->numberBetween(1,100),
            "descuento" => $this->faker->randomFloat(2,0.00,90.00),
            "precio_unitario" => $this->faker->randomFloat(2,1.00,9999.00),
            /*
            $table->integer("pedido_id");
            $table->integer("producto_id");
            $table->integer("cantidad");
            $table->double("descuento");
            $table->double("precio_unitario");
            */
        ];
    }
}
