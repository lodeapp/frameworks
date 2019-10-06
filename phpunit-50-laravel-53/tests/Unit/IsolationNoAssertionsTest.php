<?php

namespace Tests\Unit;

class IsolationNoAssertionsTest extends TestCase
{
    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testWithoutAssertions()
    {
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testAlsoWithoutAssertions()
    {
    }
}
