<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exam;
use Faker\Generator as Faker;

$factory->define(Exam::class, function (Faker $faker) {
    return [
        /*         'exam_title' => $faker->name,
        'total_answers' => $faker->integer(),
        'is_correct' => $faker->text(),
        'is_wrong' => $faker->text(), */];
});
