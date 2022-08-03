<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "fecha_pedido" => $this->faker->dateTimeInInterval('-1 month','+20 days','America/Mazatlan'),
            "fecha_entrega" => $this->faker->dateTimeInInterval('-1 week','+7 day','America/Mazatlan'),
            "id_cliente" => $this->faker->numberBetween(1,500),
            "numero_pedido" => $this->faker->unique()->numberBetween(1,9999),
            "observaciones" => $this->faker->text(200),
            //
            /**
             * $table->dateTime("fecha_pedido");
             * $table->dateTime("fecha_entrega");
             * $table->integer("id_cliente");
             * $table->bigInteger("numero_pedido");
             * $table->string("observaciones",200);
             */
        ];
    }
}
