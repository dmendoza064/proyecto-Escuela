<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('Articulos_tags', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('articulos_id')->unsigned();
            $table->integer('tags_id')->unsigned();

            $table->foreign('articulos_id')->references('id')->on('articulos')->onDelete('cascade');
            
             $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Articulos_tags');
        Schema::dropIfExists('tags');
    }
}
