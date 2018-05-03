<?php

class ExampleFeatureTest extends TestCase
{
    /** @test */
    public function it_works()
    {
        $this->get('/')
            ->assertStatus(200);
    }
}
