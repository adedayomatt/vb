<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //Share the models with the views for direct access
        View::share([
            '_tags' => \App\Tag::class,
            '_categories' => \App\Category::class,
            '_businesses' => \App\Business::class,
            '_products' => \App\Product::class,
            '_services' => \App\Service::class,

        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
