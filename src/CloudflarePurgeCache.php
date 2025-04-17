<?php

namespace Pandeydip\CloudflarePurgeCache;

use GuzzleHttp\Client;

class CloudflarePurgeCache
{
    public static function purge(array $urls): bool
    {
        $client = new Client();

        try {
            $response = $client->post(sprintf('https://api.cloudflare.com/client/v4/zones/%s/purge_cache',
                config('cloudflare-purge-cache.zone_id')), [
                    'timeout' => 10,
                    'headers' => [
                        'X-Auth-Email' => config('cloudflare-purge-cache.x_auth_email'),
                        'X-Auth-Key' => config('cloudflare-purge-cache.x_auth_key'),
                        'Content-Type' => 'application/json',
                    ],
                    'body' => json_encode([
                        'files' => $urls,
                    ]),
                ]);

            if ($response->getStatusCode() === 200) {
                return true;
            }
        } catch (\Throwable $t) {
            Log::error('Cloudflare: '.$t->getMessage());
            return false;
        }

        return false;
    }
}
