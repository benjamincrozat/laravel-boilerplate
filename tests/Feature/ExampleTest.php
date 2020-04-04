<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_works() : void
    {
        $this->get('/')->assertOk();
    }
}
