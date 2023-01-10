<?php

namespace Streams\Cms;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use Streams\Core\Support\Facades\Streams;

class CmsProvider extends ServiceProvider
{
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Streams\Cms\Console\InstallCms::class,
            ]);
        }

        $this->registerPages();
        $this->registerRedirects();
    }

    public function boot()
    {
        //
    }

    public function registerPages(): void
    {
        $pages = 'streams/pages.json';

        $this->publishes([
            __DIR__ . '/../' . $pages => base_path($pages),
        ], ['cms', 'pages']);

        if (!Streams::exists('pages')) {
            return;
        }

        $pages = Streams::repository('pages')->all();

        foreach ($pages as $page) {
            Route::get($page->path, function () use ($page) {
                return Response::view($page->template, [
                    'content' => $page->body()->render([
                        'entry' => $page,
                    ])
                ]);
            });
        }
    }

    public function registerRedirects(): void
    {
        $redirects = 'streams/redirects.json';

        $this->publishes([
            __DIR__ . '/../' . $redirects => base_path($redirects),
        ], ['cms', 'redirects']);

        if (!Streams::exists('redirects')) {
            return;
        }

        $redirects = Streams::repository('redirects')->all();

        App::booted(function () use ($redirects) {
            foreach ($redirects as $redirect) {
                Route::redirect(
                    $redirect->from,
                    URL::to($redirect->to, [], $redirect->secure),
                    $redirect->status
                );
            }
        });
    }
}
