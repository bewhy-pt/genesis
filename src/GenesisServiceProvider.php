<?php

namespace BeWhy\Genesis;

use Illuminate\Support\ServiceProvider;

class GenesisServiceProvider extends ServiceProvider {

    public function boot(){
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register(){

    }

}
