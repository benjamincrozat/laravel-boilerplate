<?php

use Illuminate\Database\Seeder;

class UsersDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    function run()
    {
        factory(User::class, 50)->create();
    }
}
