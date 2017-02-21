<?php

$factory->define(\Sucesos\Entities\Sucesos\Noticia::class, function (Faker\Generator $faker) {
    $titulo = $faker->sentence(6, true);
    return [
        'titulo' => $titulo,
        'slug_url' => SlugUrl($titulo),
        'descripcion' => $faker->paragraphs(1, true),
        'contenido' => '<p>'.$faker->paragraphs(3, true).'</p>',
        'publicar' => random_int(0, 1),
        'categoria_id' => \Sucesos\Entities\Sucesos\Categoria::all()->random()->id,
        'user_id' => 1,
        'imagen' => random_int(1, 10).'.jpg',
        'imagen_carpeta' => 'febrero2017/',
        'tipo' => $faker->randomElement(['destacado','normal']),
        'published_at' => '15/02/2017 01:02'
    ];
});