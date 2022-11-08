<?php

namespace Streams\Cms\Tests\Console;

use Streams\Cms\Tests\CmsTestCase;

class InstallCmsTest extends CmsTestCase
{
    public function test_it_installs_pages()
    {
        $this->markTestSkipped('WIP');
        
        $this->artisan('install:cms');
    }
}
