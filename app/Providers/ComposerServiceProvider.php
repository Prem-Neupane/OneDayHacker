<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('backend.*', 'App\Http\ViewComposer\HomeComposer@dashboard_data');
        View::composer('frontend.*', 'App\Http\ViewComposer\HomeComposer@topGuides');
        View::composer('frontend.*', 'App\Http\ViewComposer\HomeComposer@topPlaces');
    }


}
