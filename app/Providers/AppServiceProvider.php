<?php

namespace Sysmeh\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Blade::setRawTags("[!!", "!!]");
        \Blade::setContentTags("[[", "]]");
        \Blade::setEscapedContentTags("[[[", "]]]");
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
