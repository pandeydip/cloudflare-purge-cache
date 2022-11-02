<?php

namespace Pandeydip\CloudflarePurgeCache\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pandeydip\CloudflarePurgeCache\CloudflarePurgeCache
 */
class CloudflarePurgeCache extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pandeydip\CloudflarePurgeCache\CloudflarePurgeCache::class;
    }
}
