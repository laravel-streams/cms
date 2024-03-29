<?php

namespace App\Providers;

use Streams\Ui\Support\Facades\UI;
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
        UI::component('contact-form', \App\Components\ContactForm::class);
    }
}
