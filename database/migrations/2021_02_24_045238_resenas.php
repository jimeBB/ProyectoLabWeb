<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Resenas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resenas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('titulo');
            //$table->date('fecha_creacion');
            $table->string('categoria');
            $table->string('url');
            $table->string('texto');
            $table->string('likes');
            $table->timestamps();
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resenas');
    }
}
