<?php

namespace Ranjeet\TestMigration;
use Illuminate\Support\ServiceProvider;

use Ranjeet\TestMigration\ProcessCommand;
class TestMigrationServiceProvide extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database');
        $this->publishes([__DIR__.'/database/migrations.php' => 'migrations.php']);
    }
    
    public function register()
    {
        $this->commands([
            ProcessCommand::class
        ]);
    }
}