<?php

use App\User;

class TelescopeTest extends TestCase
{
    /** @test */
    function guests_cannot_access_telescope()
    {
        $this->getJson('/telescope')
            ->assertStatus(403);
    }

    /** @test */
    function first_user_can_access_telescope()
    {
        $this->actingAs(factory(User::class)->create())
            ->getJson('/telescope')
            ->assertStatus(200);
    }
}
