<?php

namespace Giang\Demo\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    protected $namespace = 'Giang\Demo\Http\Controllers';
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->mapWebRoutes();
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'demo-view');
    }

    protected function mapWebRoutes()
    {
        Route::namespace($this->namespace)
            ->group(__DIR__ . '/../../routes/web.php');
    }
}
