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
        $this->loadMigrationsFrom(__DUR__.'../../database/migrations');
    }


}