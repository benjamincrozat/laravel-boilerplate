<?php

use App\User;

class HorizonTest extends TestCase
{
    /** @test */
    function guests_cannot_access_horizon()
    {
        $this->getJson('/horizon')
            ->assertStatus(403);
    }

    /** @test */
    function users_can_access_horizon()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory(User::class)->create())
            ->getJson('/horizon')
            ->assertStatus(200);
    }
}
