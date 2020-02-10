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

use KodeKeep\SushiCountries\CanadianProvince;

/**
 * @covers \KodeKeep\SushiCountries\CanadianProvince
 */
class CanadianProvinceTest extends TestCase
{
    /** @test */
    public function can_count_all_provinces(): void
    {
        $this->assertCount(13, CanadianProvince::get());
    }

    /** @test */
    public function can_find_a_province_by_name(): void
    {
        $province = CanadianProvince::where('name', 'Alberta')->first();

        $this->assertSame('Alberta', $province->name);
    }

    /** @test */
    public function can_find_a_province_by_abbreviation(): void
    {
        $province = CanadianProvince::where('abbreviation', 'AB')->first();

        $this->assertSame('Alberta', $province->name);
    }
}
