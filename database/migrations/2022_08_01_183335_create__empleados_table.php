<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string("rfc",13)->unique();
            $table->string("nombre",100);
            $table->string("Apellidos",100);
            $table->string("puesto",100);
            $table->string("departamento",100);
            $table->double("sueldo");
            $table->string("fotoId")->default("default.jpg"); 
            $table->text("direccion")->nullable();
            $table->string("telefono");
            $table->string("horario",100);
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
        Schema::dropIfExists('_empleados');
    }
}
