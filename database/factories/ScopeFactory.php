<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Scope;
use Faker\Generator as Faker;

$factory->define(Scope::class, function (Faker $faker) {
    return [
        //
        'name' => 'agent'
    ];
});
