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

class CanadianProvince extends Model
{
    use Sushi;

    public function getRows()
    {
        return [
            ['name' => 'Alberta', 'abbreviation' => 'AB'],
            ['name' => 'British Columbia', 'abbreviation' => 'BC'],
            ['name' => 'Manitoba', 'abbreviation' => 'MB'],
            ['name' => 'New Brunswick', 'abbreviation' => 'NB'],
            ['name' => 'Newfoundland and Labrador', 'abbreviation' => 'NL'],
            ['name' => 'Northwest Territories', 'abbreviation' => 'NT'],
            ['name' => 'Nova Scotia', 'abbreviation' => 'NS'],
            ['name' => 'Nunavut', 'abbreviation' => 'NU'],
            ['name' => 'Ontario', 'abbreviation' => 'ON'],
            ['name' => 'Prince Edward Island', 'abbreviation' => 'PE'],
            ['name' => 'Quebec', 'abbreviation' => 'QC'],
            ['name' => 'Saskatchewan', 'abbreviation' => 'SK'],
            ['name' => 'Yukon', 'abbreviation' => 'YT'],
        ];
    }
}
