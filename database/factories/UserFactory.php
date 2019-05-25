<?php

use App\User;
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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'), // secret
        'remember_token' => str_random(10),
        'mobile_no' => $faker->phoneNumber,
        'address' => $faker->address,
        'joining_date' => $faker->dateTimeBetween('-2 years', '-1 years')->format('Y-m-d'),
        'dob' => $faker->dateTimeBetween('-30 years', '-15 years')->format('Y-m-d'), // :D
        'base_salary' => $faker->randomNumber(5),
        'type' => 'employee'
    ];
});

$factory->define(\App\Client::class, function (Faker $faker) {
   return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'company_name' => $faker->company,
        'dob' => $faker->date(),
        'mobile_no' => $faker->phoneNumber,
   ];
});

$factory->define(\App\Project::class, function (Faker $faker) {
   return [
        'client_id' => function() {
            return factory('App\Client')->create()->id;
        },
        'title' => $faker->word,
        'started_at' => $faker->date()
   ];
});

$factory->define(\App\Account::class, function (Faker $faker) {
   return [
        'user_id' => function() {
            return factory('App\User')->create()->id;
        },
        'name' => $faker->name,
        'bank_name' => $faker->word,
        'account_number' => $faker->bankAccountNumber,
        'name_on_account' => $faker->name,
        'branch_of' => $faker->city,
        'ifsc_code' => $faker->postcode
   ];
});

$factory->define(\App\Department::class, function (Faker $faker) {
   return [
        'title' => $faker->word,
        'remarks' => $faker->text
   ];
});
