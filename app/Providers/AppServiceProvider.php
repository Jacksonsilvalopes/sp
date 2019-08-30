<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
        Blade::component('componentes.formulario', 'formulario');
        Blade::component('componentes.rastro', 'rastro');
        Blade::component('componentes.tabela', 'tabela');
        Blade::component('componentes.listagem', 'listagem');
        Blade::component('componentes.listagemp', 'listagemp');
        Blade::component('componentes.pagina', 'pagina');
        Blade::component('componentes.admin', 'admin');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('App\Repositories\Contracts\UsuariosRepositoryInterface',
                         'App\Repositories\Eloquent\UsuariosRepository');
        
        $this->app->bind('App\Repositories\Contracts\ColaboradoresRepositoryInterface',
                         'App\Repositories\Eloquent\ColaboradoresRepository');
        
        $this->app->bind('App\Repositories\Contracts\ContratosRepositoryInterface',
                         'App\Repositories\Eloquent\ContratosRepository');
    }

}
