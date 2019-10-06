<?php

class IsolationSuccessTest extends TestCase
{
    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testSuccess()
    {
        $this->assertTrue(true);
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testAnotherSuccess()
    {
        $this->assertTrue(true);
    }
}
