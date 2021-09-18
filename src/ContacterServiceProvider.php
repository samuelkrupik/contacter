<?php


namespace SamuelKrupik\Contacter;


use Illuminate\Support\ServiceProvider;

class ContacterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom( __DIR__ . "/routes/web.php" );

        $this->loadMigrationsFrom( __DIR__ . "/database/migrations" );

        $this->loadViewsFrom(__DIR__."/views", "contacter");

        $this->publishes( [
            __DIR__ . '/config/contacter.php' => config_path( 'contacter.php' ),
        ], 'config' );

        $this->publishes( [
            __DIR__ . '/views' => resource_path('views/vendor/contacter'),
        ], 'views' );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__."/config/contacter.php", 'contacter');
    }
}
