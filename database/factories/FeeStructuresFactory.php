<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\FeeStructures;
use Faker\Generator as Faker;

$factory->define(FeeStructures::class, function (Faker $faker) {

    return [
        'semester_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'level_id' => $faker->randomDigitNotNull,
        'admissionFee' => $faker->randomDigitNotNull,
        'semesterFee' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
