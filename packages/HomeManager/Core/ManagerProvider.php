<?php

namespace FreeTimeLtd\HomeManager\Core;

use Illuminate\Support\ServiceProvider;

class ManagerProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');

        $this->registerPermissions();

        $this->registerPolicies();
    }

    public function register()
    {
        $this->app->singleton('core', fn () => $this->app->make(Core::class));
    }

    protected function registerPermissions()
    {
        $permissions = [];
    }

    protected function registerPolicies()
    {
        //
    }
}
