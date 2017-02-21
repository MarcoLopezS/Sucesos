<?php

use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => '1', 'email' => 'webmaster@sucesos.pe', 'password' => bcrypt('admin'), 'active' => '1']
        ]);

        DB::table('user_profiles')->insert([
            ['id' => '1', 'user_id' => '1', 'nombres' => 'Administrador', 'apellidos' => 'Sucesos']
        ]);

        //CATEGORIAS
        DB::table('categorias')->insert([
            ['id' => '1', 'titulo' => 'Investigación', 'slug_url' => 'investigacion', 'publicar' => 1],
            ['id' => '2', 'titulo' => 'Economía', 'slug_url' => 'economia', 'publicar' => 1],
            ['id' => '3', 'titulo' => 'Internacional', 'slug_url' => 'internacional', 'publicar' => 1],
            ['id' => '4', 'titulo' => 'Tecnología', 'slug_url' => 'tecnologia', 'publicar' => 1],
            ['id' => '5', 'titulo' => 'Denuncia', 'slug_url' => 'denuncia', 'publicar' => 1],
            ['id' => '6', 'titulo' => 'Entrevistas', 'slug_url' => 'entrevistas', 'publicar' => 1],
            ['id' => '7', 'titulo' => 'Historia', 'slug_url' => 'historia', 'publicar' => 1],
            ['id' => '8', 'titulo' => 'Emprendedores', 'slug_url' => 'emprendedores', 'publicar' => 1],
        ]);

        //TAGS
        DB::table('tags')->insert([
            ['id' => '1', 'titulo' => 'Perú', 'slug_url' => 'peru', 'publicar' => 1],
            ['id' => '2', 'titulo' => 'Facebook', 'slug_url' => 'facebook', 'publicar' => 1],
            ['id' => '3', 'titulo' => 'Apple', 'slug_url' => 'apple', 'publicar' => 1],
            ['id' => '4', 'titulo' => 'Bill Gates', 'slug_url' => 'bill-gates', 'publicar' => 1]
        ]);

        //NOTICIAS
        factory(\Sucesos\Entities\Sucesos\Noticia::class, 150)->create()->each(function ($u) {
            $u->tags()->sync([1,2,3,4]);
        });
    }
}
