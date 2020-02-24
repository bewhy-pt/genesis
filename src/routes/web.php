<?php
//TODO finish routes, declaration rule, before trans and more (groups
//  * 1fr  liked a lot the middleware, origin could not find it
//  Route::group(['namespace' => 'MyVendor\Contactform\Http\Controllers', 'middleware' => ['web']], function(){
//        Route::get('genesis', 'Controllers\GenesisController@index');
//  });
//  * 2nd is working here (with wierd Genesis composer), but in origin (true composer) can't over-write route /
//    justification was priority as services are loaded and config/app.php array=>providers.RouteProvider is last
//  Route::get('/', [BeWhy\Genesis\Controllers\GenesisController::class, 'index'])->name('home');
Route::localizedGroup(function () {
    Route::transGet('genesis/routes.home', [BeWhy\Genesis\Controllers\GenesisController::class, 'index'])->name('home');
    if(config('app.env') == 'local'){
        Route::transGet('genesis/routes.genesis.home', [BeWhy\Genesis\Controllers\GenesisController::class, 'docs'])->name('genesis');
        Route::transGet('genesis/routes.genesis.install', [BeWhy\Genesis\Controllers\GenesisController::class, 'install'])->name('genesis.install');
        Route::transGet('genesis/routes.genesis.new', [BeWhy\Genesis\Controllers\GenesisController::class, 'whatsNew'])->name('genesis.new');
        Route::transGet('genesis/routes.genesis.rules', [BeWhy\Genesis\Controllers\GenesisController::class, 'rules'])->name('genesis.rules');
        Route::transGet('genesis/routes.genesis.contributions', [BeWhy\Genesis\Controllers\GenesisController::class, 'contributions'])->name('genesis.contributions');
        Route::transGet('genesis/routes.genesis.more', [BeWhy\Genesis\Controllers\GenesisController::class, 'more'])->name('genesis.more');
    }
});
