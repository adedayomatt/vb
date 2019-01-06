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
            '_businesses' => \App\Business::class,
            '_businessTags' => \App\Businesstag::class,
            '_businessCategories' => \App\BusinessCategory::class,

            '_products' => \App\Product::class,
            '_productTags' => \App\Producttag::class,
            '_productCategories' => \App\ProductCategory::class,

            '_services' => \App\Service::class,
            '_serviceTags' => \App\Servicetag::class,
            '_serviceCategories' => \App\ServiceCategory::class,

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
