# Common casts for spatie/data-transfer-object

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soyhuce/data-transfer-object-casts.svg?style=flat-square)](https://packagist.org/packages/soyhuce/data-transfer-object-casts)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/soyhuce/data-transfer-object-casts/run-tests?label=tests)](https://github.com/soyhuce/data-transfer-object-casts/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/soyhuce/data-transfer-object-casts/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/soyhuce/data-transfer-object-casts/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![GitHub PHPStan Action Status](https://img.shields.io/github/workflow/status/soyhuce/data-transfer-object-casts/PHPStan?label=phpstan)](https://github.com/soyhuce/data-transfer-object-casts/actions?query=workflow%3APHPStan+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/soyhuce/data-transfer-object-casts.svg?style=flat-square)](https://packagist.org/packages/soyhuce/data-transfer-object-casts)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require soyhuce/data-transfer-object-casts
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="data-transfer-object-casts-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="data-transfer-object-casts-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="data-transfer-object-casts-views"
```

## Usage

```php
$dataTransferObjectCasts = new Soyhuce\DataTransferObjectCasts();
echo $dataTransferObjectCasts->echoPhrase('Hello, Soyhuce!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bastien Philippe](https://github.com/bastien-phi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
