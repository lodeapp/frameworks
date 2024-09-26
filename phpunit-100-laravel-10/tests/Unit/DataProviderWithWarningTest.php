<?php

namespace Tests\Unit;

use Tests\TestCase;

class DataProviderWithWarningTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testDataProviderWarning()
    {
        $this->assertTrue(true);
    }

    /**
     * Data provider that is not static should trigger a warning in PHPUnit 10.
     */
    public function dataProvider()
    {
        return [
            ['Hobnobs'],
            ['Digestives'],
            ['Rich Tea'],
        ];
    }
}
