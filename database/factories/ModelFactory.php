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

$factory->define(\Sucesos\Entities\Sucesos\Columnista::class, function (Faker\Generator $faker){
    $nombre = $faker->firstName;
    $apellidos = $faker->lastName;
    return [
        'nombre' => $nombre,
        'apellidos' => $apellidos,
        'nombre_completo' => $nombre.' '.$apellidos,
        'slug_url' => SlugUrl($nombre.' '.$apellidos),
        'imagen' => random_int(1, 10).'.jpg',
        'imagen_carpeta' => 'febrero2017/',
        'publicar' =>  random_int(0, 1)
    ];
});

$factory->define(\Sucesos\Entities\Sucesos\Columna::class, function (Faker\Generator $faker) {
    $titulo = $faker->sentence(6, true);
    return [
        'titulo' => $titulo,
        'slug_url' => SlugUrl($titulo),
        'descripcion' => $faker->paragraphs(1, true),
        'contenido' => '<p>'.$faker->paragraphs(3, true).'</p>',
        'publicar' => random_int(0, 1),
        'columnista_id' => \Sucesos\Entities\Sucesos\Columnista::all()->random()->id,
        'user_id' => 1,
        'imagen' => random_int(1, 10).'.jpg',
        'imagen_carpeta' => 'febrero2017/',
        'published_at' => '15/02/2017 01:02'
    ];
});

$factory->define(\Sucesos\Entities\Sucesos\Video::class, function (Faker\Generator $faker) {
    $titulo = $faker->sentence(6, true);
    return [
        'titulo' => $titulo,
        'slug_url' => SlugUrl($titulo),
        'descripcion' => $faker->paragraphs(1, true),
        'publicar' => random_int(0, 1),
        'user_id' => 1,
        'youtube' => $faker->randomElement([
            'https://www.youtube.com/watch?v=1itm2NXQBmI',
            'https://www.youtube.com/watch?v=OY_qgSO-6i8',
            'https://www.youtube.com/watch?v=cmt48AQu1EU',
            'https://www.youtube.com/watch?v=AistXSvg98Q',
            'https://www.youtube.com/watch?v=PwNdsIh6sGY',
            'https://www.youtube.com/watch?v=GHP2jLKPmPk',
            'https://www.youtube.com/watch?v=vgJIqvC_BCE',
            'https://www.youtube.com/watch?v=2IPWbaV5dBM'
        ]),
        'imagen' => random_int(1, 10).'.jpg',
        'imagen_carpeta' => 'febrero2017/',
        'published_at' => '15/02/2017 01:02'
    ];
});