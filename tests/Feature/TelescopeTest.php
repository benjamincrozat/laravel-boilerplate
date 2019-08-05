<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class TelescopeTest extends TestCase
{
    /** @test */
    public function guests_cannot_access_telescope()
    {
        $this->getJson('/telescope')
            ->assertStatus(403);
    }

    /** @test */
    public function users_cannot_access_telescope()
    {
        $this->actingAs(factory(User::class)->create(['id' => 2]))
            ->getJson('/telescope')
            ->assertStatus(403);
    }

    /** @test */
    public function first_user_can_access_telescope()
    {
        $this->actingAs(factory(User::class)->create(['id' => 1]))
            ->getJson('/telescope')
            ->assertStatus(200);
    }
}
