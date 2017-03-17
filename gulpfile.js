const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.less('animate.less');
    mix.less('style.less');
    mix.less('ts.less');
    mix.less('flexslider/flexslider.less', 'public/libs/flexslider/flexslider.css');
    mix.scripts(['main.js'], 'public/js/main.js');
    mix.scripts(['flexslider.js'], 'public/js/flexslider.js');
    mix.webpack('suscripcion.js');

    mix.version([
        'css/animate.css',
        'css/style.css',
        'css/ts.css',
        'libs/flexslider/flexslider.css',
        'js/main.js',
        'js/flexslider.js',
        'js/suscripcion.js'
    ]);
});
