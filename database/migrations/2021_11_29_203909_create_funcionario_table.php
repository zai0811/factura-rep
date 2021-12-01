<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pk_empresa')->nullable();
            $table->foreign('pk_empresa', 'pk_empresa')->references('id')->on('empresa');
            $table->unsignedInteger('pk_usuario')->nullable();
            $table->foreign('pk_usuario', 'pk_usuario')->references('id')->on('usuario');
            $table->string('password')->nullable();;
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
        Schema::dropIfExists('funcionario');
    }
}
