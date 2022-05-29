<?php

namespace App\Providers;

use App\Heading;
use App\Sector;
use App\Resource;
use App\Career;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('nav_headings', Heading::all());
        view()->share('nav_sectors', Sector::all());
        view()->share('nav_resources', Resource::all());
        view()->share('nav_careers', Career::all());
    }
}
