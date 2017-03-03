<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Videos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('titulo');
            $table->string('slug_url');
            $table->text('descripcion')->nullable();
            $table->boolean('publicar')->default(false);
            $table->integer('user_id')->unsigned();
            $table->string('youtube');
            $table->string('imagen', 150);
            $table->string('imagen_carpeta', 100);
            $table->timestamp('published_at')->nullable();
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
        Schema::drop('videos');
    }
}
