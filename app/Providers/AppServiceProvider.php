<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\HelpFunction\LoginHelper;
use Illuminate\Support\Facades\View;
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
        //injecting a class that require parameter in their constructor
        /// bind return several  instance of the class
        $this->app->bind(LoginHelper::class, function ($pp) {
            return new LoginHelper('component');
        });
        ////single reurn the single instance of the classs making it the same throught out the app
        ///this is the same way we implemet interface that a class implement
        $this->app->singleton(LoginHelper::class, function ($pp) {
            return new LoginHelper('component');
        });
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //sharing data across view// this will go to all view 
        View::share('nameofview', ['datato share']);
        //sharing data with a view file in the list
        View::composer(['viefiledirlist here'], function ($view) {
            $view->with('nameof wiew', ['data']);
        });
    }
}
