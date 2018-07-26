<?php

class HomeTest extends TestCase
{
    /** @test */
    function it_works()
    {
        $this->getJson('/')
            ->assertStatus(200);
    }
}
