<?php

class ExampleFeatureTest extends TestCase
{
    /** @test */
    function it_works()
    {
        $this->withoutExceptionHandling();

        $this->get('/')
            ->assertStatus(200);
    }
}
