<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDbTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('slug_url');
            $table->string('descripcion')->nullable();
            $table->text('contenido')->nullable();
            $table->boolean('publicar')->default(false);
            $table->integer('categoria_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->string('imagen', 150);
            $table->string('imagen_carpeta', 100);

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('tags', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('slug_url');
            $table->text('descripcion')->nullable();
            $table->boolean('publicar')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('noticia_tag', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('noticia_id');
            $table->integer('tag_id');
        });

        Schema::create('categorias', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('titulo');
            $table->string('slug_url');
            $table->text('descripcion')->nullable();
            $table->boolean('publicar')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('imagenes', function(Blueprint $table)
        {
            $table->increments('id');

            $table->morphs('imagenable');
            $table->string('titulo')->nullable();
            $table->string('imagen')->nullable();
            $table->string('imagen_carpeta')->nullable();
            $table->integer('orden');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ajustes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type', 50);
            $table->string('name');
            $table->string('label');
            $table->string('value');
            $table->text('contenido');
            $table->timestamps();
        });

        Schema::create('histories', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('historyble_id')->unsigned();
            $table->string('historyble_type');

            $table->integer('user_id')->nullable()->default(NULL);

            $table->enum('type', ['create','update', 'restore', 'delete']);
            $table->enum('opcion', ['text', 'file']);
            $table->text('descripcion');

            $table->nullableTimestamps();
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
        Schema::drop('histories');
        Schema::drop('ajustes');
        Schema::drop('imagenes');
        Schema::drop('categorias');
        Schema::drop('noticia_tag');
        Schema::drop('tags');
        Schema::drop('noticias');
    }
}
