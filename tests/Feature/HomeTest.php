<?php

class HomeTest extends TestCase
{
    /** @test */
    function it_works()
    {
        $this->getJson(route('home'))
            ->assertStatus(200);
    }
}
