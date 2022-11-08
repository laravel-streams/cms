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
    }

    public function boot()
    {
        $this->registerPages();
        $this->registerRedirects();
    }

    public function registerPages()
    {
        if (!Streams::exists('pages')) {
            Streams::load(__DIR__ . '/../streams/pages.json');
        }

        $pages = Streams::repository('pages')->all();

        // 1.) Route
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

    public function registerRedirects()
    {
        return;
        if (!Streams::exists('redirects')) {
            Streams::load(__DIR__ . '/../streams/redirects.json');
        }

        $redirects = Streams::repository('redirects')->all();

        // 1.) Route
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
