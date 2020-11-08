<?php

declare(strict_types=1);

/*
 * This file is part of Sushi Countries.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\SushiCountries;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Country extends Model
{
    use Sushi;

    public function getRows()
    {
        $filepath = strpos(getcwd(), 'public') === strlen(getcwd()) - strlen('public')
            ? base_path('vendor/mledoze/countries/dist/countries.json')
            : 'vendor/mledoze/countries/dist/countries.json';

        $database = \json_decode(\file_get_contents($filepath), true);

        return collect($database)
            ->map(fn ($country) => [
                'code'   => $country['cca2'],
                'code3'  => $country['cca3'],
                'name'   => $country['name']['common'],
                'number' => $country['ccn3'],
            ])
            ->toArray();
    }
}
