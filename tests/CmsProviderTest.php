<?php

namespace Streams\Cms\Tests;

use Streams\Core\Support\Facades\Streams;
use Streams\Cms\Tests\CmsTestCase;

class CmsProviderTest extends CmsTestCase
{
    public function test_it_registers_pages()
    {
        $this->assertTrue(Streams::exists('pages'));
    }

    public function test_it_routes_pages()
    {
        $this->get('/lost')->assertSeeText('Not Found');
        
        $this->get('/about')->assertSee('Simple, flexible content management.');
    }

    public function test_it_routes_redirects()
    {
        $this->get('/old-path')->assertRedirect('/new-path');

        $this->get('/')->assertRedirect('/welcome');
    }
}
