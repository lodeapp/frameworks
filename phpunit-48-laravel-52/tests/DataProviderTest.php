<?php

class DataProviderTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testDataProviderSuccess()
    {
        $this->assertTrue(true);
    }

    public function dataProvider()
    {
        return [
            ['Hobnobs'],
            ['Digestives'],
            ['Rich Tea'],
        ];
    }
}
