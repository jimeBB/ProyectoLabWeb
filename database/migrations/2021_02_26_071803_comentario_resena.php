<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ComentarioResena extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_resena', function (Blueprint $table) {

            $table->integer('comentario_id')->unsigned();
        
            $table->integer('resena_id')->unsigned();
        
            $table->foreign('comentario_id')->references('id')->on('comentarios')->onDelete('cascade');
        
            $table->foreign('resena_id')->references('id')->on('resenas')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario_resena');
    }
}


