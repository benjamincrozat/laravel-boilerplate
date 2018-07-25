<?php

class ExampleFeatureTest extends TestCase
{
    /** @test */
    function it_works()
    {
        $this->get('/')
            ->assertStatus(200);
    }
}
