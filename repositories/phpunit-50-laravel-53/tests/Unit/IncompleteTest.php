<?php

namespace Tests\Unit;

use Tests\TestCase;

class IncompleteTest extends \TestCase
{
    public function testSuccess()
    {
        // Start with a successful test so we can ensure the suite
        // itself will be marked as incomplete.
        $this->assertTrue(true);
    }

    public function testIncomplete()
    {
        $this->markTestIncomplete();
    }

    public function testAlsoIncomplete()
    {
        $this->markTestIncomplete();
    }
}
