<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    /** @test */
    public function it_works()
    {
        $this->getJson(route('home'))
            ->assertStatus(200);
    }
}
