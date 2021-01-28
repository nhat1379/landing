<?php

namespace App\Providers;

use App\Models\Config;
use App\Models\Gallery;
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
        $config = Config::get()->keyBy('name');

        $web = $home = [];

        if (count($config)) {
            if (!empty($config['website'])) {
                $web = json_decode($config['website']['value'], true);
            }
            if (!empty($config['home'])) {
                $home = json_decode($config['home']['value'], true);
            }
        }

        $galleries = Gallery::latest()->get();

        View::share('web', $web);
        View::share('home', $home);
        View::share('galleries', $galleries);
    }
}
