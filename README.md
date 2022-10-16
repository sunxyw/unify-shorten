# Unify Shorten - Make all URL Shorteners together

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sunxyw/unify-shorten.svg?style=flat-square)](https://packagist.org/packages/sunxyw/unify-shorten)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sunxyw/unify-shorten/run-tests?label=tests)](https://github.com/sunxyw/unify-shorten/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sunxyw/unify-shorten/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/sunxyw/unify-shorten/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sunxyw/unify-shorten.svg?style=flat-square)](https://packagist.org/packages/sunxyw/unify-shorten)

This is a package that helps you quickly access various short link services, which you can use to make your app support
short links provided by different short link services.
From full disclosure, to requiring registration, and even paid services.

## Installation

You can install the package via composer:

```bash
composer require sunxyw/unify-shorten
```

You can publish the config file with (it should be published automatically):

```bash
php artisan vendor:publish --tag="unify-shorten-config"
```

## Usage

```php
// using Facade
use Sunxyw\Shorten\Facades\Shorten;
Shorten::shorten('AWESOME URL HERE'); // using default provider
Shorten::provider('cuttly')->shorten('AWESOME URL HERE WITH CUTTLY'); // using cuttly provider

// using helper function
shorten('AWESOME URL HERE'); // using default provider

// using Shorten class
use Sunxyw\Shorten\Shorten;
app(Shorten::class)->shorten('AWESOME URL HERE'); // using default provider
app(Shorten::class)->provider('cuttly')->shorten('AWESOME URL HERE WITH CUTTLY'); // using cuttly provider
app(Shorten::class)->gotiny->shorten('AWESOME URL HERE WITH GOTINY'); // using gotiny provider (using magic property)
```

All the methods above will return the shortened URL.

## Supported Providers

| API                                                                                  | Auth     | HTTPS | CORS    |
|--------------------------------------------------------------------------------------|----------|-------|---------|
| [1pt](https://github.com/1pt-co/api/blob/main/README.md)                             | No       | Yes   | Yes     |
| [CleanURI](https://cleanuri.com/docs)                                                | No       | Yes   | Yes     |
| [Cutt.ly](https://cutt.ly/api-documentation/cuttly-links-api)                        | `apiKey` | Yes   | Unknown |
| [GoTiny](https://github.com/robvanbakel/gotiny-api)                                  | No       | Yes   | Yes     |

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [sunxyw](https://github.com/sunxyw)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
