<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composer\NavbarComposer;
use Illuminate\Support\Facades;
use Illuminate\Pagination\Paginator;
use App\Models\ContactUs;

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
        view()->composer("admin.contacts", function($show){
            $counts= ContactUs::where('read_at',0)->count();
            $show->with('unread',$counts);
        });
        Paginator::useBootstrapFour();
    }
}
