<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ResenasComentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resenas_comentarios', function (Blueprint $table) {

            $table->integer('comentarios_id')->unsigned();
        
            $table->integer('resenas_id')->unsigned();
        
            $table->foreign('comentarios_id')->references('id')->on('comentarios')->onDelete('cascade');
        
            $table->foreign('resenas_id')->references('id')->on('resenas')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resenas_comentarios');
    }
}
