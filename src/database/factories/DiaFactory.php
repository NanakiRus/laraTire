<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Dia::class, function (Faker $faker) {
    return [
        'dia' => '',
        'created_at' => date('Y-m-d H:i:s')
    ];
});
