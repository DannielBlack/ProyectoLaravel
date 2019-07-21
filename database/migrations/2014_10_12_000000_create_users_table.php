<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->string('nombre');
            $table->string('apellido');
            $table->enum('tipodocumento',['CEDULA','RUC','PASAPORTE']);
            $table->string('numerodocumento');
            $table->enum('genero',['FEMENINO','MASCULINO']);
            $table->date('nacimiento');
            $table->string('direccion');
            $table->string('celular');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('usuario');
    }
}
