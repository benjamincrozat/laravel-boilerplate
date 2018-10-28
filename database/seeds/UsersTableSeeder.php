<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    function run()
    {
        factory(User::class)->create([
            'name'  => 'John Doe',
            'email' => 'john@doe.com',
        ]);

        factory(User::class, 50)->create();
    }
}
