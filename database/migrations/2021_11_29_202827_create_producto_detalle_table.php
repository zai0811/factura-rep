<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_detalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pk_producto')->nullable();
            $table->foreign('pk_producto')->references('id')->on('producto');
            $table->integer('cantidad');
            $table->unsignedInteger('pk_marca')->nullable();
            $table->foreign('pk_marca')->references('id')->on('marca');
            $table->integer('precio_unitario');
            $table->integer('total');
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
        Schema::dropIfExists('producto_detalle');
    }
}
