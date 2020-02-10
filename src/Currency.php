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

class Currency extends Model
{
    use Sushi;

    public function getRows()
    {
        $database = \json_decode(\file_get_contents('vendor/mledoze/countries/dist/countries.json'), true);

        return collect($database)
            ->map(function ($country) {
                return collect($country['currencies'])->map(fn ($currency, $abbreviation) => [
                    'name'         => $currency['name'],
                    'abbreviation' => $abbreviation,
                    'symbol'       => $currency['symbol'],
                ]);
            })
            ->flatten(1)
            ->unique('name')
            ->toArray();
    }
}
