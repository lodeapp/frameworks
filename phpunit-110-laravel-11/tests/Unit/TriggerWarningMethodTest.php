<?php

namespace Tests\Unit;

use Tests\TestCase;

class TriggerWarningMethodTest extends TestCase
{
    public function testTriggerWarning()
    {
        trigger_error('Hello', E_USER_NOTICE);

        $this->assertTrue(true);
    }

    public function testSuccess()
    {
        $this->assertTrue(true);
    }
}
