<?php

namespace RyanThompson\Cms\Tests\Console;

use RyanThompson\Cms\Tests\CmsTestCase;

class InstallCmsTest extends CmsTestCase
{
    public function test_it_installs_pages()
    {
        $this->markTestSkipped('WIP');
        
        $this->artisan('install:cms');
    }
}
