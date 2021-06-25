<?php

namespace App\Providers;

use App\Location;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*',function ($view){
            $view->with('locations', Location::all());
        });
        View::composer('*',function ($view){
            $view->with('session',session()->all());
        });
    }
}
