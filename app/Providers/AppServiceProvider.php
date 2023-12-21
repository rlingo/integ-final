<?php

namespace App\Providers;

use App\Models\Students;
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
        view()->share('title', 'Student Admin');
        // view()->composer('/students.index', function ($view) {
        //     $view->with('students', Students::all());
        // });
    }
}
