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
        // trigger_error('Hello', E_USER_WARNING);

        $this->assertTrue(true);
    }
}
