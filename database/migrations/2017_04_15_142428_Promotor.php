<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Promotor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rif');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('fecha_nacimiento');
            $table->string('sexo');
            $table->string('nivel_estudio');
            $table->string('estado_civil');
            $table->string('telefono_fijo');
            $table->string('telefono_celular');
            $table->string('direccion');
            $table->string('email')->unique();
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
        Schema::drop('promotores');
    }
}
