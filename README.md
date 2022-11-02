# This package helps you purge cache specifying a host/url

[![Latest Version on Packagist](https://img.shields.io/packagist/v/pandeydip/cloudflare-purge-cache.svg?style=flat-square)](https://packagist.org/packages/pandeydip/cloudflare-purge-cache)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/pandeydip/cloudflare-purge-cache/run-tests?label=tests)](https://github.com/pandeydip/cloudflare-purge-cache/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/pandeydip/cloudflare-purge-cache/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/pandeydip/cloudflare-purge-cache/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/pandeydip/cloudflare-purge-cache.svg?style=flat-square)](https://packagist.org/packages/pandeydip/cloudflare-purge-cache)

## Installation

You can install the package via composer:

```bash
composer require pandeydip/cloudflare-purge-cache
```


You can publish the config file with:

```bash
php artisan vendor:publish --tag="cloudflare-purge-cache-config"
```

This is the contents of the published config file:

```php
eturn [
    'zone_id' => env('ZONE_ID', ''),
    'x_auth_email' => env('X_AUTH_EMAIL', ''),
    'x_auth_key' => env('X_AUTH_KEY', ''),
];
```
You can these details by logging into [cloudflare.com](https://dash.cloudflare.com/)

## Usage
It returns boolean response `true` when success and `false` when purgin fails

```php
$response = CloudflarePurgeCache::purge(['https://abc.com', 'https://abc.com/test']);
echo $response;
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Deepak Pandey](https://github.com/pandeydip)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
