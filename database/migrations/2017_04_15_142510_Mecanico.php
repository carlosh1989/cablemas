<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mecanico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mecanicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('fecha_nacimiento');
            $table->string('sexo');
            $table->string('nivel_estudio');
            $table->string('telefono_fijo');
            $table->string('telefono_celular');
            $table->string('direccion');
            $table->string('email')->unique();
            $table->string('especialidad');
            $table->string('anos_experiencia');
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
        Schema::drop('mecanicos');
    }
}
