<?php

namespace Owlcoder\LaravelMeta\Providers;

use Illuminate\Support\ServiceProvider;
use Owlcoder\LaravelMeta\Services\MetaService;

class MetaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MetaService::class, function ($app) {
            return new MetaService();
        });
    }
}
