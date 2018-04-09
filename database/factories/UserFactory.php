<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(600, 338),
        'title' => $faker->word(5, true),
        'description' => $faker->realText(),
        'publish_date' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});

$factory->define(App\BlogCategory::class, function (Faker $faker) {
    return [
        'title' => $faker->word(5, true),
    ];
});

$factory->define(App\BlogTag::class, function (Faker $faker) {
    return [
        'title' => $faker->word(5, true),
    ];
});

$factory->define(App\Biography::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surnames' => $faker->lastName,
        'image' => $faker->imageUrl(600, 338),
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'phone2' => $faker->phoneNumber,
        'job' => $faker->word(5, true),
        'description' => $faker->realText(),

    ];
});

$factory->define(App\BiographyEducation::class, function (Faker $faker) {
    return [
        'title' => $faker->word(5, true),
        'description' => $faker->realText(),
        'biography_id' => 1

    ];
});

$factory->define(App\Slider::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(600, 338),
        'title' => $faker->name,
        'description' => $faker->realText(),
        'button' => $faker->word(5, true),
        'link' => $faker->Url,
        

    ];
});

$factory->define(App\PracticeArea::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->realText(),
        'image' => $faker->imageUrl(600, 338),
        
    ];
});
