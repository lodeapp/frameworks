<?php

namespace Tests\Unit;

use Tests\TestCase;
use LodeApp\PHPUnit\Console;

class ConsoleTest extends TestCase
{
    /**
     * @before
     */
    public function suiteLog()
    {
        Console::log('This is a suite log.');
    }

    public function testConsoleLogNull()
    {
        Console::log(null);

        return $this->assertTrue(true);
    }

    public function testConsoleLogString()
    {
        Console::log('Hobnobs');

        return $this->assertTrue(true);
    }

    public function testConsoleLogArray()
    {
        Console::log([
            'biscuit' => 'Hobnobs',
        ]);

        return $this->assertTrue(true);
    }

    public function testConsoleLogMultiple()
    {
        Console::log('This', 'is', 'the', 'same', 'call');
        Console::log('This is a different call');

        return $this->assertTrue(true);
    }

    public function testConsoleLogLargeObject()
    {
        Console::log($this);

        return $this->assertTrue(true);
    }

    public function testConsoleDumpAlias()
    {
        Console::dump('Hobnobs');

        return $this->assertTrue(true);
    }

    public function testConsolePrint()
    {
        Console::print('This', 'is', 'the', 'same', 'call');
        Console::print('This is a different call');

        return $this->assertTrue(true);
    }

    public function testConsoleHelper()
    {
        console('This', 'is', 'the', 'same', 'call');
        console('This is a different call');

        return $this->assertTrue(true);
    }
}
