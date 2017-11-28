<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticulos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('contenido');
            $table->integer('users_id')->unsigned();
            $table->integer('categorias_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

             $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::dropIfExists('articulos');
    }
}
