<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    // we could map here any repository that not direct associate with service
    private $map = [
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        parent::register(); // TODO: Change the autogenerated stub
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        foreach ($this->map as $abstract => $class) {
            $this->app->bind($abstract, $class);
        }
    }
}