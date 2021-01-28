<?php

namespace App\Providers;

use App\Models\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $web = Config::where('name', 'website')->first();

        if (!$web) {
            $web = [];
        }else {
            $web = json_decode($web['value'], true);
        }

        View::share('web', $web);
    }
}
