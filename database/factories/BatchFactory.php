<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Batch;
use Faker\Generator as Faker;

$factory->define(Batch::class, function (Faker $faker) {

    return [
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
