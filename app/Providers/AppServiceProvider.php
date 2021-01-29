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
                $web = array_merge($web, $home);
            }
        }

        $galleries = Gallery::latest()->take(6)->get();

        if (count($galleries) < 6) {
            $count = 6 - count($galleries);

            for ($i = 0; $i < $count; $i++) {
                $galleries[] = (object) [
                    'is_example' => 1,
                    'title' => 'example ' . $i,
                    'image' => 'https://via.placeholder.com/700x972.png'
                ];
            }
        }

        View::share('web', $web);
        View::share('galleries', $galleries);
    }
}
