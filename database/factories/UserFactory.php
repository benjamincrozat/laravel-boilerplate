<?php

/** @var Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => '$argon2i$v=19$m=1024,t=2,p=2$Z0dHaS45aTZ2eTVrUGNmVA$4cnLj0VkJMadhl5AcB1XxPxInGlvzJDKRal4Wqw6Ypk', // secret
        'remember_token' => str_random(10),
    ];
});
