<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use App\User;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
   return [
      "name" => $faker->realText(30),
      "order" => $faker->biasedNumberBetween(100, 999),
      "category_id" => function(){
         return Category::all()->random()->id;
      },
      "user_id" => function(){
         return User::all()->random()->id;
      }
   ];
});
