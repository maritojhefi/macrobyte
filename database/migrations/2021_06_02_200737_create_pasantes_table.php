<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->nullable()->default('');
            $table->string('cedula', 100)->nullable()->default('');
            $table->string('telefono', 100)->nullable()->default('');
            $table->string('nacimiento', 100)->nullable()->default('');
            $table->string('estudios', 500)->nullable()->default('');
            $table->string('foto', 500)->nullable()->default('');

            $table->string('photoshop', 100)->nullable()->default('');
            $table->string('office', 100)->nullable()->default('');
            $table->string('redes', 100)->nullable()->default('');
            $table->string('marketing', 100)->nullable()->default('');
            $table->string('edicionvideos', 100)->nullable()->default('');
            $table->string('poseecompu', 100)->nullable()->default('');
            $table->string('tarijeno', 100)->nullable()->default('');
            $table->string('menora25', 100)->nullable()->default('');
            $table->string('practica', 100)->nullable()->default('');


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
        Schema::dropIfExists('pasantes');
    }
}
