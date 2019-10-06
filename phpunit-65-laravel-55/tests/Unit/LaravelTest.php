<?php

namespace Tests\Unit;

use Tests\TestCase;

class LaravelTest extends TestCase
{
    public function testAssertSuccessful()
    {
        return $this->get(route('error'))
            ->assertSuccessful();
    }

    public function testAssertOk()
    {
        return $this->get(route('error'))
            ->assertOk();
    }

    public function testAssertNotFound()
    {
        return $this->get(route('test'))
            ->assertNotFound();
    }

    public function testAssertStatus()
    {
        return $this->get(route('test'))
            ->assertStatus(418);
    }

    public function testAssertSee()
    {
        return $this->get(route('test'))
            ->assertSee('Rich Tea');
    }

    public function testAssertJson()
    {
        return $this->JSON('GET', route('api.test'))
            ->assertJson(['Rich Tea']);
    }
}
