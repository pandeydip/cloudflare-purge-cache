<?php

namespace Pandeydip\CloudflarePurgeCache;

use Pandeydip\CloudflarePurgeCache\Commands\CloudflarePurgeCacheCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CloudflarePurgeCacheServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('cloudflare-purge-cache')
            ->hasConfigFile()
            ->hasCommand(CloudflarePurgeCacheCommand::class);
    }
}
