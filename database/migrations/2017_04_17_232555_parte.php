<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Parte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('marca_id')->unsigned()->index();
            $table->integer('categoria_id')->unsigned()->index();
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('imagen');
            $table->string('categoria');
            $table->string('marca');
            $table->string('modelo');
            $table->string('ano');
            $table->string('codigo');
            $table->integer('cantidad');
            $table->integer('stock');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE partes ADD FULLTEXT full(nombre, descripcion, categoria, marca, modelo, ano)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partes');
    }
}
