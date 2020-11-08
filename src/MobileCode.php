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

class MobileCode extends Model
{
    use Sushi;

    public function getRows()
    {
        $database = \json_decode(\file_get_contents(base_path('vendor/kodekeep/mobile-codes/dist/unsorted/data.json')), true);

        return collect($database)
            ->map(fn ($country) => [
                'mcc'          => $country['mcc'],
                'mnc'          => $country['mnc'],
                'iso'          => $country['iso'],
                'country_name' => $country['country_name'],
                'country_code' => $country['country_code'],
                'network'      => $country['network'],
            ])
            ->toArray();
    }
}
