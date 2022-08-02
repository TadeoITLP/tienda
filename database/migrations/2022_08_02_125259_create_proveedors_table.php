<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string("compania",100)->unique();
            $table->string("direccion",100)->nullable();
            $table->string("ciudad",100)->nullable();
            $table->string("codigoPostal",100)->nullable();
            $table->string("pais",100)->nullable();
            $table->string("telefono",20)->nullable();
            $table->string("nombreContacto",100)->unique();
            $table->string("telefonoContacto",20)->nullable();
            $table->string("email",100)->unique();
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
        Schema::dropIfExists('proveedors');
    }
}

