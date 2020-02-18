# Sushi Countries

[![Latest Version](https://badgen.net/packagist/v/kodekeep/sushi-countries)](https://packagist.org/packages/kodekeep/sushi-countries)
[![Software License](https://badgen.net/packagist/license/kodekeep/sushi-countries)](https://packagist.org/packages/kodekeep/sushi-countries)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/sushi-countries/run-tests?label=tests)](https://github.com/kodekeep/sushi-countries/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/sushi-countries)](https://codeclimate.com/github/kodekeep/sushi-countries)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/sushi-countries)](https://codeclimate.com/github/kodekeep/sushi-countries)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/sushi-countries)](https://packagist.org/packages/kodekeep/sushi-countries)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides models to work with countries for [calebporzio/sushi](https://github.com/calebporzio/sushi)

## Installation

```bash
composer require kodekeep/sushi-countries
```

## Usage

### Country

```php
use KodeKeep\SushiCountries\Country;

Country::where('code', 'FI')->first();
Country::where('code3', 'FIN')->first();
Country::where('name', 'Finland')->first();
Country::where('number', 246)->first();
```

### Canadian Province

```php
use KodeKeep\SushiCountries\CanadianProvince;

CanadianProvince::where('name', 'Alberta')->first();
CanadianProvince::where('abbreviation', 'AB')->first();
```

### United State

```php
use KodeKeep\SushiCountries\UnitedState;

UnitedState::where('name', 'California')->first();
UnitedState::where('abbreviation', 'CA')->first();
```

### Currency

```php
use KodeKeep\SushiCountries\Currency;

Currency::where('name', 'Euro')->first();
Currency::where('abbreviation', 'EUR')->first();
Currency::where('symbol', '€')->first();
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Sushi Countries is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
