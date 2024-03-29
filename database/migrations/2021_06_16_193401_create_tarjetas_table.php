<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->integer('minutos')->unsigned()->nullable()->default(0);
            $table->string('email', 100)->nullable();
            $table->string('contrasena', 100)->nullable();
            $table->string('estado', 100)->nullable()->default('offline');
            $table->dateTime('hora_marcada')->nullable();            
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
        Schema::dropIfExists('tarjetas');
    }
}
