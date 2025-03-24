<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Загрузка любых служб приложения.
     */
    public function boot(): void
    {
        Paginator::defaultView('vendor.pagination.default');
    }
}
