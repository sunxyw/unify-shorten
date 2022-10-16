# This is my package unify-shorten

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sunxyw/unify-shorten.svg?style=flat-square)](https://packagist.org/packages/sunxyw/unify-shorten)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/sunxyw/unify-shorten/run-tests?label=tests)](https://github.com/sunxyw/unify-shorten/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/sunxyw/unify-shorten/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/sunxyw/unify-shorten/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sunxyw/unify-shorten.svg?style=flat-square)](https://packagist.org/packages/sunxyw/unify-shorten)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/unify-shorten.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/unify-shorten)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can
support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.
You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards
on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require sunxyw/unify-shorten
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="unify-shorten-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="unify-shorten-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="unify-shorten-views"
```

## Usage

```php
$shorten = new Sunxyw\Shorten();
echo $shorten->echoPhrase('Hello, Sunxyw!');
```

## Supported Providers

| API                                                                                  | Auth     | HTTPS | CORS    | Supported? |
|--------------------------------------------------------------------------------------|----------|-------|---------|------------|
| [1pt](https://github.com/1pt-co/api/blob/main/README.md)                             | No       | Yes   | Yes     |            |
| [Bitly](http://dev.bitly.com/get_started.html)                                       | `OAuth`  | Yes   | Unknown |            |
| [CleanURI](https://cleanuri.com/docs)                                                | No       | Yes   | Yes     |            |
| [ClickMeter](https://support.clickmeter.com/hc/en-us/categories/201474986)           | `apiKey` | Yes   | Unknown |            |
| [Clico](https://cli.com/swagger-ui/index.html?configUrl=/v3/api-docs/swagger-config) | `apiKey` | Yes   | Unknown |            |
| [Cutt.ly](https://cutt.ly/api-documentation/cuttly-links-api)                        | `apiKey` | Yes   | Unknown |            |
| [Drivet URL Shortener](https://wiki.drivet.xyz/en/url-shortener/add-links)           | No       | Yes   | Unknown |            |
| [Free Url Shortener](https://ulvis.net/developer.html)                               | No       | Yes   | Unknown |            |
| [Git.io](https://github.blog/2011-11-10-git-io-github-url-shortener/)                | No       | Yes   | Unknown |            |
| [GoTiny](https://github.com/robvanbakel/gotiny-api)                                  | No       | Yes   | Yes     |            |
| [Kutt](https://docs.kutt.it/)                                                        | `apiKey` | Yes   | Yes     |            |
| [Mgnet.me](http://mgnet.me/api.html)                                                 | No       | Yes   | No      |            |
| [owo](https://owo.vc/api)                                                            | No       | Yes   | Unknown |            |
| [Rebrandly](https://developers.rebrandly.com/v1/docs)                                | `apiKey` | Yes   | Unknown |            |
| [Short Link](https://github.com/FayasNoushad/Short-Link-API)                         | No       | Yes   | Unknown |            |
| [Shrtcode](https://shrtco.de/docs)                                                   | No       | Yes   | Yes     |            |
| [Shrtlnk](https://shrtlnk.dev/developer)                                             | `apiKey` | Yes   | Yes     |            |
| [TinyURL](https://tinyurl.com/app/dev)                                               | `apiKey` | Yes   | No      |            |
| [UrlBae](https://urlbae.com/developers)                                              | `apiKey` | Yes   | Yes     |            |

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
