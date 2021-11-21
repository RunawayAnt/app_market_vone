<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('shopname');
            $table->text('slug');
            $table->integer('ruc');
            $table->text('description');
            $table->string('logo');
            //$table->integer('puntaje'); //temporal
            $table->string('email')->nullable();
            $table->string('linkssocial')->nullable();
            $table->string('phone');
            $table->unsignedBigInteger('user_id')->unique(); //una solo empresa para el usuario
            $table->unsignedBigInteger('section_id');

            $table->foreign('section_id')
                ->references('id')
                ->on('sections')
                ->onDelete('cascade'); //Borrar elemento en caso no exista seccion o rubro con id

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade'); //Borrar elemento en caso no exista usuario con id
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
        Schema::dropIfExists('shops');
    }
}
