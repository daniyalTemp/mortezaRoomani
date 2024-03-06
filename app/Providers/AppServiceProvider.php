<?php

namespace App\Providers;

use App\Models\config;
use App\Models\contact;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $view->with('config',
                config::all()[0]);
        });
        view()->composer('*', function ($view) {
            $view->with('contacts',
                contact::where('seen', 0 )->get());
        });
    }
}
