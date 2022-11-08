<?php

namespace Streams\Cms\Tests;

use Streams\Testing\TestCase;
use Illuminate\Support\Facades\File;
use Streams\Cms\CmsProvider;

abstract class CmsTestCase extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [CmsProvider::class];
    }

    protected function restoreStreamsData()
    {
        parent::restoreStreamsData();
        
        // 1.) Pages
        File::copy(
            __DIR__ . '/../streams/pages.json',
            base_path('streams/pages.json')
        );

        File::copyDirectory(
            __DIR__ . '/../streams/data/pages',
            base_path('streams/data/pages')
        );

        // 2.) Redirects
        File::copy(
            __DIR__ . '/../streams/redirects.json',
            base_path('streams/redirects.json')
        );

        File::copyDirectory(
            __DIR__ . '/../streams/data/redirects',
            base_path('streams/data/redirects')
        );
    }
}
