<?php namespace Sucesos\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            ['frontend.partials.mas-visto','frontend.partials.portada','frontend.partials.siguenos','frontend.partials.tags'],
            'Sucesos\ViewComposers\FrontendComposer'
        );

//        view()->composer(
//            ['layouts.frontend'],
//            'Sucesos\ViewComposer\LayoutsComposer'
//        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
