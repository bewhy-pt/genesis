<?php

namespace BeWhy\Genesis;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

use BeWhy\Genesis\Controllers\GenesisController;

class GenesisServiceProvider extends ServiceProvider {


    public function boot(){
        // TODO migrations seeds and langs https://laravel.com/docs/6.x/packages
        // $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'template');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'translation');

        $this->publishes([
            __DIR__.'/assets/lang' => resource_path('lang/pt'),
            __DIR__.'/resources/lang/en' => resource_path('lang/en/genesis'),
            __DIR__.'/resources/lang/pt' => resource_path('lang/pt/genesis'),
        ], 'lang');

        $this->publishes([
            __DIR__.'/assets/template' => public_path('template/genesis'),
            __DIR__.'/assets/errors' => resource_path('views/errors'),
        ], 'assets');

        $this->publishes([
            __DIR__.'/assets/css' => public_path('css'),
        ], 'assets');

        // Todo not working  publish all in genesis call
        if ($this->app->runningInConsole()) {
            Artisan::call('vendor:publish', [
                '--provider' => 'Barryvdh\Debugbar\ServiceProvider'
            ]);
            Artisan::call('vendor:publish', [
                '--provider' => 'Spatie\Permission\PermissionServiceProvider',
                '--tag'    => "migrations"
            ]);
            Artisan::call('vendor:publish', [
                '--provider' => 'Spatie\Permission\PermissionServiceProvider'
            ]);
            Artisan::call('vendor:publish', [
                '--provider' => 'Arcanedev\Localization\LocalizationServiceProvider'
            ]);

        }


    }

    public function register(){
        $this->app->make(GenesisController::class);
    }

}
