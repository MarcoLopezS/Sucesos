<?php

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('noticia', function () {
    return view('frontend.noticia');
});

//CAMBIAR ANCHO Y ALTO DE IMAGEN
Route::get('/upload/{folder}/{width}x{height}/{image}', ['as' => 'image.adaptiveResize', 'uses' => 'ImageController@adaptiveResize']);

//CAMBIAR ANCHO DE IMAGNE
Route::get('/upload/{folder}/{width}/{image}', ['as' => 'image.withResize', 'uses' => 'ImageController@withResize']);

Auth::routes();

Route::group(['as' => 'admin.', 'middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function() {

    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

    //EMPRESA
//    Route::group(['prefix' => 'company'], function(){
//        //NOSOTROS
//        Route::get('us', ['as' => 'admin.company.us.edit', 'uses' => 'CompanyController@usEdit']);
//        Route::put('us', ['as' => 'admin.company.us.update', 'uses' => 'CompanyController@usUpdate']);
//
//        //SOCIAL MEDIA
//        Route::get('social', ['as' => 'admin.company.social.edit', 'uses' => 'CompanyController@socialEdit']);
//        Route::put('social', ['as' => 'admin.company.social.update', 'uses' => 'CompanyController@socialUpdate']);
//    });

    //NOTICIAS
    Route::resource('noticias', 'NoticiasController');

    Route::group(['as' => 'noticias.', 'prefix' => 'noticias/images'], function(){
        Route::get('{noticia}', ['as' => 'img.list', 'uses' => 'NoticiasController@photosList' ]);
        Route::post('{noticia}/order', ['as' => 'img.order', 'uses' => 'NoticiasController@photosOrder' ]);
        Route::get('{noticia}/upload', ['as' => 'img.create', 'uses' => 'NoticiasController@photosCreate' ]);
        Route::post('{noticia}/upload', ['as' => 'img.store', 'uses' => 'NoticiasController@photosStore' ]);
        Route::delete('{noticia}/delete/{id}', ['as' => 'img.delete', 'uses' => 'NoticiasController@photosDelete' ]);
    });

    //DOCUMENTOS
    Route::post('documentos/upload-imagen', ['as' => 'documentos.upload.imagen', 'uses' => 'HomeController@uploadImagen']);

    //CONFIGURACION
    Route::get('config', ['as' => 'config', 'uses' => 'ConfigsController@edit']);
    Route::put('config', ['as' => 'config.update', 'uses' => 'ConfigsController@update']);

    //USUARIOS
    Route::resource('user', 'UsersController');

    //CONTACTO - MENSAJES
//    Route::resource('contacto/mensajes', 'ContactoMensajesController', ['only' => ['index','show']]);
//    Route::resource('contacto/sugerencias', 'ContactoSugerenciasController', ['only' => ['index','show']]);

});