<?php

namespace Owlcoder\LaravelMeta\Providers;

use Illuminate\Support\ServiceProvider;

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
