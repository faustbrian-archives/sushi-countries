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

namespace KodeKeep\SushiCountries\Tests;

use KodeKeep\SushiCountries\Country;

/**
 * @coversNothing
 */
class CountryTest extends TestCase
{
    /** @test */
    public function can_count_all_countries(): void
    {
        $this->assertCount(250, Country::get());
    }

    /** @test */
    public function can_find_a_country_by_code(): void
    {
        $country = Country::where('code', 'FI')->first();

        $this->assertSame('Finland', $country->name);
    }

    /** @test */
    public function can_find_a_country_by_code3(): void
    {
        $country = Country::where('code3', 'FIN')->first();

        $this->assertSame('Finland', $country->name);
    }

    /** @test */
    public function can_find_a_country_by_name(): void
    {
        $country = Country::where('name', 'Finland')->first();

        $this->assertSame('Finland', $country->name);
    }

    /** @test */
    public function can_find_a_country_by_number(): void
    {
        $country = Country::where('number', 246)->first();

        $this->assertSame('Finland', $country->name);
    }
}
