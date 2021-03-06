<?php

namespace Petar\txtdiff;

use Illuminate\Support\ServiceProvider;

class TxtdiffServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Petar\txtdiff\TxtdiffController');
    }
}
