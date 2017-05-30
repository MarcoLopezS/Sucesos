<?php

//FRONTEND
Route::get('/', ['as' => 'home', 'uses' => 'FrontendController@home']);
Route::get('seccion/{url}', ['as' => 'categoria', 'uses' => 'FrontendController@categoria']);
Route::get('tag/{url}', ['as' => 'tag', 'uses' => 'FrontendController@tag']);
Route::get('nota/{id}-{url}', ['as' => 'noticia', 'uses' => 'FrontendController@noticia']);
Route::get('columnistas', ['as' => 'columnistas', 'uses' => 'FrontendController@columnistas']);
Route::get('columnista/{url}', ['as' => 'columnista', 'uses' => 'FrontendController@columnista']);
Route::get('columna/{id}-{url}', ['as' => 'columna', 'uses' => 'FrontendController@columna']);
Route::get('buscar', ['as' => 'buscar', 'uses' => 'FrontendController@buscar']);
Route::get('portada', ['as' => 'portada', 'uses' => 'FrontendController@portada']);
Route::get('portada/{fecha}', ['as' => 'portada.fecha', 'uses' => 'FrontendController@portadaFecha']);
Route::get('ediciones-anteriores', ['as' => 'ed-anterior', 'uses' => 'FrontendController@edAnterior']);
Route::get('suscripcion', ['as' => 'suscripcion', 'uses' => 'FrontendController@suscripcion']);
Route::post('suscripcion', ['as' => 'suscripcion.post', 'uses' => 'FrontendController@suscripcionPost']);

//CAMBIAR ANCHO Y ALTO DE IMAGEN
Route::get('/upload/{folder}/{width}x{height}/{image}', ['as' => 'image.adaptiveResize', 'uses' => 'ImageController@adaptiveResize']);

//CAMBIAR ANCHO DE IMAGNE
Route::get('/upload/{folder}/{width}/{image}', ['as' => 'image.withResize', 'uses' => 'ImageController@withResize']);

//LOGIN
Auth::routes();

//ADMIN
Route::group(['as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function() {

    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    //COLUMNISTAS
    Route::resource('columnistas', 'ColumnistasController');
    Route::resource('columnistas.columna', 'ColumnaController');

    //TAGS
    Route::resource('tags', 'TagsController');

    //PORTADAS
    Route::resource('portadas', 'PortadasController');

    //NOTICIAS
    Route::resource('noticias', 'NoticiasController');
    Route::group(['as' => 'noticias.', 'prefix' => 'noticias/images'], function(){
        Route::get('{noticia}', ['as' => 'img.list', 'uses' => 'NoticiasController@photosList' ]);
        Route::post('{noticia}/order', ['as' => 'img.order', 'uses' => 'NoticiasController@photosOrder' ]);
        Route::get('{noticia}/upload', ['as' => 'img.create', 'uses' => 'NoticiasController@photosCreate' ]);
        Route::post('{noticia}/upload', ['as' => 'img.store', 'uses' => 'NoticiasController@photosStore' ]);
        Route::delete('{noticia}/delete/{id}', ['as' => 'img.delete', 'uses' => 'NoticiasController@photosDelete' ]);
    });

    //VIDEOS
    Route::resource('videos', 'VideosController');

    //DOCUMENTOS
    Route::post('documentos/upload-imagen', ['as' => 'documentos.upload.imagen', 'uses' => 'HomeController@uploadImagen']);

    //CONFIGURACION
    Route::get('config', ['as' => 'config', 'uses' => 'ConfigsController@edit']);
    Route::put('config', ['as' => 'config.update', 'uses' => 'ConfigsController@update']);

    //USUARIOS
    Route::resource('user', 'UsersController');
    Route::post('user/{user}/foto', ['as' => 'user.updateFoto', 'uses' => 'UsersController@updateFoto']);
    Route::post('user/{user}/password', ['as' => 'user.updatePassword', 'uses' => 'UsersController@updatePassword']);
});