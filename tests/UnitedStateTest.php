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

use KodeKeep\SushiCountries\UnitedState;

/**
 * @covers \KodeKeep\SushiCountries\UnitedState
 */
class UnitedStateTest extends TestCase
{
    /** @test */
    public function can_count_all_states(): void
    {
        $this->assertCount(61, UnitedState::get());
    }

    /** @test */
    public function can_find_a_state_by_name(): void
    {
        $state = UnitedState::where('name', 'California')->first();

        $this->assertSame('California', $state->name);
    }

    /** @test */
    public function can_find_a_state_by_abbreviation(): void
    {
        $state = UnitedState::where('abbreviation', 'CA')->first();

        $this->assertSame('California', $state->name);
    }
}
