<?php

namespace Mimachh\Seo;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Mimachh\Seo\Commands\MakeSchema;
use Mimachh\Seo\Schemas\Person;

class SeoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/schema.php' => config_path('schema.php'),
        ]);

        // publish the migrations
        $this->publishes([
            __DIR__ . '/./database/migrations/' => database_path('migrations'),
        ], 'seo-migrations');


        $this->publishes([
            __DIR__ . '/./resources/js/Components' => resource_path('js/Components/mimachh/seo')
        ], '2fa-assets');

        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeSchema::class,

            ]);
        }
    }

    public function register()
    {
        $this->app->singleton('SchemaOrg', function ($app) {
            return new SchemaOrg;
        });

        $loader = AliasLoader::getInstance();

        // Add your aliases
        $loader->alias('SchemaOrg', SchemaOrg::class);
    }
}
