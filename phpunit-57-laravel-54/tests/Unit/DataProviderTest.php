<?php

namespace Tests\Unit;

use Tests\TestCase;

class DataProviderTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testDataProviderSuccess()
    {
        $this->assertTrue(true);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testDataProviderWithFailure($data)
    {
        $this->assertTrue(in_array($data, ['Hobnobs', 'Digestives']));
    }

    /**
     * @dataProvider otherDataProvider
     */
    public function testDataProviderWithArrayData($data)
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

    public function otherDataProvider()
    {
        return [
            'biscuits' => [
                'Hobnobs',
                'Digestives',
                'Rich Tea',
            ],
            'cakes' => [
                'Carrot',
                'Chocolate',
            ],
            'breads' => [
                'Banana',
            ]
        ];
    }
}
