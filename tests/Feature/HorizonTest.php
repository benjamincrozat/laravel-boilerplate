<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class HorizonTest extends TestCase
{
    /** @test */
    public function guests_cannot_access_horizon()
    {
        $this->getJson('/horizon')
            ->assertStatus(403);
    }

    /** @test */
    public function users_cannot_access_horizon()
    {
        $this->actingAs(factory(User::class)->create(['id' => 2]))
            ->getJson('/horizon')
            ->assertStatus(403);
    }

    /** @test */
    public function first_user_can_access_horizon()
    {
        $this->actingAs(factory(User::class)->create(['id' => 1]))
            ->getJson('/horizon')
            ->assertStatus(200);
    }
}
