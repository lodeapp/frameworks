<?php

namespace Tests\Unit;

use Tests\TestCase;

class WarningProtectedMethodTest extends TestCase
{
    protected function testProtectedWarning()
    {
        $this->assertTrue(true);
    }

    public function testPublicSuccess()
    {
        $this->assertTrue(true);
    }
}
