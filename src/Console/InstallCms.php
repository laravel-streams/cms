<?php

namespace Streams\Cms\Console;

use Illuminate\Console\Command;

class InstallCms extends Command
{
    protected $signature = 'install:cms';

    protected $description = 'Install the CMS.';

    public function handle()
    {
        return Command::SUCCESS;
    }
}
