<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\Layout\Admin\AdminLayout;
// use App\View\Components\Layout\Admin\AdminLayout;
use App\View\Components\Layout\Admin\GuestLayout;
use App\View\Components\Layout\Customer\CustomerLayout;

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
        Blade::component('customer-layout', CustomerLayout::class);
        Blade::component('guest-layout', GuestLayout::class);
        Blade::component('admin-layout', AdminLayout::class);
    }
}