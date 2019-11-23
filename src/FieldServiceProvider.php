<?php

namespace Flaravel\NovaSpec;

use Illuminate\Routing\Router;
use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $this->publishes([
            __DIR__.'/../dist/fonts' => public_path('fonts'),
        ], 'fonts');
        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-spec', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-spec', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
