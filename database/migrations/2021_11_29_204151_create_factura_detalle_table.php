<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_detalle', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pk_pedido')->nullable();
            $table->foreign('pk_pedido')->references('id')->on('pedido');
            $table-> unsignedInteger('pk_producto_detalle')->nullable();
            $table->foreign('pk_producto_detalle')->references('id')->on('producto_detalle');
            $table->unsignedInteger('pk_facturas')->nullable();
            $table->foreign('pk_facturas')->references('id')->on('factura');
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
        Schema::dropIfExists('factura_detalle');
    }
}
