# Common casts for spatie/data-transfer-object

[![Latest Version on Packagist](https://img.shields.io/packagist/v/soyhuce/data-transfer-object-casts.svg?style=flat-square)](https://packagist.org/packages/soyhuce/data-transfer-object-casts)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/soyhuce/data-transfer-object-casts/run-tests?label=tests)](https://github.com/soyhuce/data-transfer-object-casts/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/soyhuce/data-transfer-object-casts/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/soyhuce/data-transfer-object-casts/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![GitHub PHPStan Action Status](https://img.shields.io/github/workflow/status/soyhuce/data-transfer-object-casts/PHPStan?label=phpstan)](https://github.com/soyhuce/data-transfer-object-casts/actions?query=workflow%3APHPStan+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/soyhuce/data-transfer-object-casts.svg?style=flat-square)](https://packagist.org/packages/soyhuce/data-transfer-object-casts)

Common casts for spatie/data-transfer-object

## Installation

You can install the package via composer:

```bash
composer require soyhuce/data-transfer-object-casts
```

## Usage

### BooleanCaster

Casts the input into boolean, if applicable.

```php
use Soyhuce\DataTransferObjectCasts\BooleanCaster;
use Spatie\DataTransferObject\Attributes\DefaultCast;
use Spatie\DataTransferObject\DataTransferObject;

#[DefaultCast('bool', BooleanCaster::class)]
class MyDTO extends DataTransferObject
{
    public bool $bool;
}

$dto = new MyDTO(
    bool: 'true',
);

$dto->bool; // true
```

### CarbonImmutableCaster

Cast the input into a CarbonImmutable instance. If the input is not a string, it will be returned as is.

By default, the format is `'!Y-m-d H:i:s'`.

```php
use Carbon\CarbonImmutable;
use Soyhuce\DataTransferObjectCasts\CarbonImmutableCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\DefaultCast;
use Spatie\DataTransferObject\DataTransferObject;

#[DefaultCast(CarbonImmutable::class, CarbonImmutableCaster::class)]
class MyDTO extends DataTransferObject
{
    public CarbonImmutable $dateTime;

    #[CastWith(CarbonImmutableCaster::class, '!Y-m-d')]
    public CarbonImmutable $date;
}

$dto = new MyDTO(
    dateTime: '2022-08-11 14:44:45',
    date: '2022-08-01',
);

$dto->dateTime; // CarbonImmutable instance
$dto->date; // CarbonImmutable instance
```

### StringEnumCaster

Cast the input into a backed string enum.

```php
use Soyhuce\DataTransferObjectCasts\StringEnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\DataTransferObject;

#[CastWith(StringEnumCaster::class)]
enum StringEnum: string
{
    case ok = 'ok';
    case nok = 'nok';
}

class MyDTO extends DataTransferObject
{
    public StringEnum $stringEnum;
}

$dto = new MyDTO(
    stringEnum: 'ok',
);

$dto->stringEnum; // StringEnum::ok
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
