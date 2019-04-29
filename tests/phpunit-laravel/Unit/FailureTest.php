<?php

namespace Tests\Unit;

use Exception;
use Mockery as m;
use Tests\TestCase;

class FailureTest extends TestCase
{
    public function testSuccess()
    {
        // Start with a successful test so we can ensure the suite
        // itself will be marked as failed.
        $this->assertTrue(true);
    }

    public function testExceptionHandling()
    {
        return $this->traceableOne();
    }

    protected function traceableOne()
    {
        return $this->traceableTwo();
    }

    protected function traceableTwo()
    {
        return $this->traceableThree();
    }

    protected function traceableThree()
    {
        throw new Exception('This is a custom exception message.');
    }

    public function testNestedException()
    {
        try {
            throw new Exception('First exception.');
        } catch (Exception $e) {
            try {
                throw new Exception('Second exception.', 0, $e);
            } catch (Exception $e) {
                try {
                    throw new Exception('Third exception.', 0, $e);
                } catch (Exception $e) {
                    throw new Exception('This is the final exception.', 0, $e);
                }
            }
        }
    }

    public function testVendorException()
    {
        app('biscuit');
    }

    public function testMockFail()
    {
        $mock = m::mock(Report::class);
        $mock->shouldReceive('biscuit')->once();
    }

        public function testBooleanDiff()
    {
        $this->assertTrue(false);
    }

    public function testStringDiff()
    {
        $this->assertEquals('Hobnobs', 'Digestives');
    }

    public function testArrayDiff()
    {
        $this->assertEquals(['Hobnobs'], ['Digestives']);
    }
}
