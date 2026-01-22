<?php

namespace App\Providers;

use App\View\Composers\CompanyComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('test','este es un mensaje de prueba');

       /* View::composer(['welcome','posts/index'],function($view) {
            $view->with('prueba2',CompanyComposer::class);
        });*/
        View::composer(['index'],CompanyComposer::class);
        }
}
