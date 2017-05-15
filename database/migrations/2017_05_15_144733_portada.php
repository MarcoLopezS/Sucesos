<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Portada extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portadas', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('titulo');
            $table->string('slug_url');
            $table->string('imagen');
            $table->string('imagen_carpeta', 20);
            $table->boolean('publicar')->default(1);
            $table->timestamp('published_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('portadas');
    }
}
