<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Mahasiswa;
use Faker\Generator as Faker;

$factory->define(Mahasiswa::class, function (Faker $faker) {
    return [
        'nim' => $faker->bankAccountNumber,
        'nama' => $faker->name,
        'jurusan' => $faker->company,
        'fakultas' => $faker->company,
    ];
});
