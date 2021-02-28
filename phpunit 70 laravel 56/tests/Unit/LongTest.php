<?php

namespace Tests\Unit;

use Tests\TestCase;

/**
 * The LongTest is useful for testing protracted actions while running
 * tests, enabling us to debug issues with blooming / withering / persisting of
 * test results. Ordinarily it should run without delay in normal circumstances,
 * but we can quickly enable delay centrally.
 */

class LongTest extends TestCase
{
    protected $delay = 0; // In seconds

    public function test1()
    {
        $this->assertTrue(true);
    }

    public function test2()
    {
        sleep($this->delay);
        $this->assertTrue(true);
    }

    public function test3()
    {
        sleep($this->delay);
        $this->assertTrue(true);
    }

    public function test4()
    {
        sleep($this->delay);
        $this->assertTrue(true);
    }

    public function test5()
    {
        sleep($this->delay);
        $this->assertTrue(true);
    }

    public function test6()
    {
        sleep($this->delay);
        $this->assertTrue(true);
    }

    public function test7()
    {
        sleep($this->delay);
        $this->assertTrue(true);
    }
}
