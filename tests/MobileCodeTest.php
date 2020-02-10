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

use KodeKeep\SushiCountries\MobileCode;

/**
 * @covers \KodeKeep\SushiCountries\MobileCode
 */
class MobileCodeTest extends TestCase
{
    /** @test */
    public function can_count_all_countries(): void
    {
        $this->assertCount(1690, MobileCode::get());
    }

    /** @test */
    public function can_find_a_code_by_mcc(): void
    {
        $code = MobileCode::where('mcc', '238')->first();

        $this->assertIsString($code->mcc);
    }

    /** @test */
    public function can_find_a_code_by_mnc(): void
    {
        $code = MobileCode::where('mnc', '05')->first();

        $this->assertIsString($code->mcc);
    }

    /** @test */
    public function can_find_a_code_by_iso(): void
    {
        $code = MobileCode::where('iso', 'dk')->first();

        $this->assertIsString($code->mcc);
    }

    /** @test */
    public function can_find_a_code_by_country_name(): void
    {
        $code = MobileCode::where('country_name', 'Denmark')->first();

        $this->assertIsString($code->mcc);
    }

    /** @test */
    public function can_find_a_code_by_country_code(): void
    {
        $code = MobileCode::where('country_code', '45')->first();

        $this->assertIsString($code->mcc);
    }

    /** @test */
    public function can_find_a_code_by_network(): void
    {
        $code = MobileCode::where('network', 'ApS KBUS')->first();

        $this->assertIsString($code->mcc);
    }
}
