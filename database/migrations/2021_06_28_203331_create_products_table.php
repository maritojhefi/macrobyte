<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->bigInteger('compra_id')->unsigned()->nullable();
            $table->bigInteger('stock_id')->unsigned()->nullable();
            $table->string('codigoBarra', 100)->nullable();
            $table->string('imagen', 100)->nullable();
            $table->string('codigoProducto', 100)->nullable();
            $table->integer('cantidad')->unsigned()->nullable()->default(0);
            $table->integer('precioVenta')->unsigned()->nullable()->default(0);

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
        Schema::dropIfExists('products');
    }
}
