<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_empresa', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pk_users')->nullable();
            $table->foreign('pk_users', 'pk_users')->references('id')->on('users');
            $table->unsignedInteger('pk_empresa')->nullable();
            $table->foreign('pk_empresa', 'pk_empresa')->references('id')->on('empresa');
            $table->string('rol')->nullable();
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
        Schema::dropIfExists('user_empresa');
    }
}
