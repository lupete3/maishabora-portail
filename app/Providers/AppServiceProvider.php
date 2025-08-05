<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('path.public', function () {
            // Check if public_html exists one level above the base path (e.g., for cPanel)
            $cpanelPublicPath = base_path('../public_html');
            if (is_dir($cpanelPublicPath)) {
                return $cpanelPublicPath;
            }
    
            // Otherwise, return the default public path
            return base_path('public');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
