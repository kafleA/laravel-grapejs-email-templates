<?php

namespace Amrit\GrapejsEmailTemplates;

use Illuminate\Support\ServiceProvider;

class EmailTemplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/databases/migrations');
    }

    public function register()
    {
    }
}