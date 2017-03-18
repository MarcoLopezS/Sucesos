<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AutorNoticia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->string('nombre_completo')->after('apellidos')->nullable();
            $table->text('slug_url')->after('nombre_completo')->nullable();
            $table->string('cargo', 100)->after('slug_url')->nullable();
            $table->text('descripcion')->after('cargo')->nullable();
            $table->string('imagen')->after('descripcion')->nullable();
            $table->string('imagen_carpeta')->after('imagen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->dropColumn('nombre_completo','slug_url','cargo','descripcion','imagen','imagen_carpeta');
        });
    }
}
