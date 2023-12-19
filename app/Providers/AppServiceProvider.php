<?php

namespace App\Providers;

use App\Models\Words;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;
use Illuminate\Pagination\Paginator;
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
    //для работы ссылок при пагинации
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();
    }
}
