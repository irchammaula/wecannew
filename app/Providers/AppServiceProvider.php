<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
<<<<<<< HEAD
use Illuminate\Support\Facades\Vite;
=======
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
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
<<<<<<< HEAD
        Vite::prefetch(concurrency: 3);
        // if (config('app.env') == "local") {
        //     URL::forceScheme('https');
        // }
=======
        if (config('app.env') === 'local') {
            URL::forceScheme('https');
        }
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    }
}
