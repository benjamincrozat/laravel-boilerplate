<?php

use App\User;

class NovaTest extends TestCase
{
    function setUp()
    {
        parent::setUp();

        $this->markTestSkipped();
    }

    /** @test */
    function guests_cannot_access_nova()
    {
        $this->getJson('/nova')
            ->assertStatus(401);
    }

    /** @test */
    function first_user_can_access_nova()
    {
        $this->actingAs(factory(User::class)->create())
            ->getJson('/nova')
            ->assertStatus(200);
    }
}
