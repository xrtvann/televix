<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share authenticated user with all admin views
        View::composer('components.admin.*', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $user->loadMissing(['roles.permissions']);
                $view->with('authUser', $user);
            }
        });

        // Share authenticated user with all page views
        View::composer('pages.admin.*', function ($view) {
            if (Auth::check()) {
                $user = Auth::user();
                $user->loadMissing(['roles.permissions']);
                $view->with('authUser', $user);
            }
        });
    }
}
