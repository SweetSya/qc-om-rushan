<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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
        Blade::directive('serveruri', function () {
            return "http://127.0.0.1:8000";
        });
        Blade::directive('serverstorageuri', function () {
            return "http://127.0.0.1:8000/storage";
        });
        Blade::directive('numformat', function ($expression) {
            return "<?php echo number_format($expression,0,',','.'); ?>";
        });
    }
}
