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

namespace KodeKeep\SushiCountries\Tests\Unit;

use KodeKeep\SushiCountries\Currency;
use KodeKeep\SushiCountries\Tests\TestCase;

/**
 * @covers \KodeKeep\SushiCountries\Currency
 */
class CurrencyTest extends TestCase
{
    /** @test */
    public function can_count_all_currencies(): void
    {
        $this->assertCount(165, Currency::get());
    }

    /** @test */
    public function can_find_a_currency_by_name(): void
    {
        $currency = Currency::where('name', 'Euro')->first();

        $this->assertSame('Euro', $currency->name);
    }

    /** @test */
    public function can_find_a_currency_by_abbreviation(): void
    {
        $currency = Currency::where('abbreviation', 'EUR')->first();

        $this->assertSame('Euro', $currency->name);
    }

    /** @test */
    public function can_find_a_currency_by_symbol(): void
    {
        $currency = Currency::where('symbol', '€')->first();

        $this->assertSame('Euro', $currency->name);
    }
}
