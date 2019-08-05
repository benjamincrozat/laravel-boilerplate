<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class NovaTest extends TestCase
{
    /** @test */
    public function guests_cannot_access_nova()
    {
        $this->getJson('/nova')
            ->assertStatus(401);
    }

    /** @test */
    public function users_cannot_access_nova()
    {
        $this->actingAs(factory(User::class)->create(['id' => 2]))
            ->getJson('/nova')
            ->assertStatus(403);
    }

    /** @test */
    public function first_user_can_access_nova()
    {
        $this->actingAs(factory(User::class)->create(['id' => 1]))
            ->getJson('/nova')
            ->assertStatus(200);
    }
}
