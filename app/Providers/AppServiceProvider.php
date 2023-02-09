<?php

namespace App\Providers;

use Livewire\Livewire;
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
        UI::register('contact-form', \App\Components\ContactForm::class);

        Livewire::component('contact-form', \App\Components\ContactForm::class);
        
        Livewire::component('textarea', \Streams\Ui\Components\Inputs\Textarea::class);
    }
}
