<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        //COLUMNISTA
        factory(\Sucesos\Entities\Sucesos\Columnista::class, 13)->create();

        //COLUMNAS
        factory(\Sucesos\Entities\Sucesos\Columna::class, 100)->create();

        factory(\Sucesos\Entities\Sucesos\Video::class, 25)->create();
    }
}
