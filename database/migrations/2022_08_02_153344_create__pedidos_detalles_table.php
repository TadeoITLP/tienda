<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_pedidos_detalles', function (Blueprint $table) {
            $table->id();
            $table->integer("pedido_id");
            $table->integer("producto_id");
            $table->integer("cantidad");
            $table->double("precio_unitario");
            $table->double("descuento");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_pedidos_detalles');
    }
}
