# Sushi Countries

[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kodekeep/sushi-countries/run-tests?label=tests)](https://github.com/kodekeep/sushi-countries/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Code Coverage](https://badgen.now.sh/codecov/c/github/kodekeep/sushi-countries)](https://codecov.io/gh/kodekeep/sushi-countries)
[![Minimum PHP Version](https://badgen.net/packagist/php/kodekeep/sushi-countries)](https://packagist.org/packages/kodekeep/sushi-countries)
[![Latest Version](https://badgen.net/packagist/v/kodekeep/sushi-countries)](https://packagist.org/packages/kodekeep/sushi-countries)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/sushi-countries)](https://packagist.org/packages/kodekeep/sushi-countries)
[![License](https://badgen.net/packagist/license/kodekeep/sushi-countries)](https://packagist.org/packages/kodekeep/sushi-countries)

> Countries for [calebporzio/sushi](https://github.com/calebporzio/sushi)

## Installation

```bash
composer require kodekeep/sushi-countries
```

## Usage

``` php
use KodeKeep\SushiCountries\Country;

Country::where('code', 'FI')->first();

Country::where('code3', 'FIN')->first();

Country::where('name', 'Finland')->first();

Country::where('number', 246)->first();
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

## License

Mozilla Public License Version 2.0 (MPL-2.0). Please see [License File](LICENSE.md) for more information.
