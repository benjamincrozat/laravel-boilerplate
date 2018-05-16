<?php

class ExampleFeatureTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        
        // If your tests hit Redis, you should flush the cache before every test.
        // cache()->flush();
    }
    
    /** @test */
    public function it_works()
    {
        $this->get('/')
            ->assertStatus(200);
    }
}
