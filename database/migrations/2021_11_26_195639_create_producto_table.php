<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *2
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            //tipo de dato
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->unsignedInteger('pk_categoria')->nullable();
            $table->foreign('pk_categoria')->references('id')->on('categoria');
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
        Schema::dropIfExists('producto');
    }
}
