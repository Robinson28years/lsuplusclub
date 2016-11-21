<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->safeEmail,
//        'avatar' =>$faker->imageUrl(256,256),
//        'password' => bcrypt(str_random(10)),
//        'remember_token' => str_random(10),
//    ];
//});

//$factory->define(App\Discuss::class, function (Faker\Generator $faker) {
//    $user_ids = \App\User::lists('id')->toArray();
//    return [
//        'title' => $faker->sentence,
////        'body' => $faker->paragraphs(3,true),
//        'user_id' =>$faker->randomElements($user_ids),
//        'last_user_id' => $faker->randomElements($user_ids),
//    ];
//});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
//    $user_ids = \App\User::lists('id')->toArray();
    return [
//        'title' => $faker->sentence,
        'body' => $faker->paragraphs(3,true),
        'user_id' =>$faker->numberBetween(56,76),
        'discussion_id' => $faker->numberBetween(74,76),
    ];
});

//$factory->define(App\Library_book::class, function (Faker\Generator $faker) {
//    return [
//        'book_name' => $faker->name,
//        'order_email' => $faker->safeEmail,
//    ];
//});
