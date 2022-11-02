<?php

namespace Pandeydip\CloudflarePurgeCache\Commands;

use Illuminate\Console\Command;

class CloudflarePurgeCacheCommand extends Command
{
    protected $signature = 'purge:cloudflare:cache
                            {urls : list of urls to purge.}';

    public $description = 'Purge Cloudflare Cache for set of urls ';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
