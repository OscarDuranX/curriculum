<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 3/11/16
 * Time: 21:08
 */

namespace Scool\Curriculum\Providers;

use Illuminate\Support\ServiceProvider;

class CurriculumServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->loadMigrations();
        $this->publishFactories()

    }

    private function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'../../database/migrations');
    }

    private function publishFactories()
    {
        $this->publishes(
            [
                __DIR__.'/../../database/factories/StudyFactory.php' =>
                database_path() . '/factories/StudyFactory'
            ],"scool_curriculum"
        );
    }


}