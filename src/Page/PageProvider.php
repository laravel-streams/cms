<?php

namespace RyanThompson\Cms\Page;

use Illuminate\Support\ServiceProvider;

class PageProvider extends ServiceProvider
{
    public static $publishGroups = [
        ''
    ];

    public function register()
    {
        dd('Register');
    }

    public function boot()
    {
        dd('Boot');
    }
}
