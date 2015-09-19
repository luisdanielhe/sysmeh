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
        \Blade::setContentTags('[[', ']]');        // for variables and all things Blade
        \Blade::setEscapedContentTags('[[[', ']]]');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Blade::setContentTags('[[', ']]');        // for variables and all things Blade
        \Blade::setEscapedContentTags('[[[', ']]]');   // for escaped data
    }
}
