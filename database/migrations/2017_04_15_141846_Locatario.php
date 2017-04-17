<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Locatario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locatarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razon_social');
            $table->string('rif');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('servicios');
            $table->string('horarios');
            $table->string('forma_pago');
            $table->string('redes_sociales');
            $table->string('encargos');
            $table->string('responsable');
            $table->string('responsable_telefono');
            $table->string('responsable_email');
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
        Schema::drop('locatarios');
    }
}
