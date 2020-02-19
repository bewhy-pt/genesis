<?php

namespace BeWhy\Genesis;

use Illuminate\Support\ServiceProvider;

use BeWhy\Genesis\Controllers\GenesisController;

class GenesisServiceProvider extends ServiceProvider {

    public function boot(){
        // TODO migrations seeds and langs https://laravel.com/docs/6.x/packages
        // $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'template');


        $this->publishes([
            __DIR__.'/assets/template' => public_path('template/genesis'),
        ], 'assets');
        $this->publishes([
            __DIR__.'/assets/css' => public_path('css'),
        ], 'assets');
    }

    public function register(){
        $this->app->make(GenesisController::class);
    }

}
