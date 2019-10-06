<?php

namespace Tests\Unit;

use Tests\TestCase;

class SkippedTest extends TestCase
{
    public function testSuccess()
    {
        // Start with a successful test so we can ensure the suite
        // itself will be marked as skipped (incomplete).
        $this->assertTrue(true);
    }

    public function testSkipped()
    {
        $this->markTestSkipped();
    }

    public function testAlsoSkipped()
    {
        $this->markTestSkipped();
    }
}
