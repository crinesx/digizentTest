<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('calle');
            $table->string('ciudad');
            $table->string('Estado');
            $table->Integer('priority');
            $table->unsignedBigInteger('usuarios_id');
            $table->timestamps();

            $table->foreign('usuarios_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
