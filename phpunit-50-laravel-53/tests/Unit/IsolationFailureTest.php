<?php

namespace Tests\Unit;

use Exception;

class IsolationFailureTest extends TestCase
{
    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testSuccess()
    {
        // Start with a successful test so we can ensure the suite
        // itself will be marked as failed.
        $this->assertTrue(true);
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testExceptionHandling()
    {
        throw new Exception('This is a custom exception message.');
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testIsolationDiff()
    {
        $this->assertEquals('Hobnobs', 'Digestives');
    }
}
