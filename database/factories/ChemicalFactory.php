<?php

use Faker\Generator as Faker;

$factory->define(Cidery\Chemical::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'manufacturer' => $faker->company,
        'usage' => $faker->paragraph,
        'storage' => $faker->paragraph
    ];
});

$factory->define(Cidery\ChemicalInventory::class, function (Faker $faker) {
	return [
		'date_received' => $faker->date,
		'price' => $faker->randomFloat(2),
		'po_number' => $faker->randomNumber,
		'lot_number' => $faker->randomNumber,
		'expiration' => $faker->date,
		'package_size' => $faker->randomNumber,
		'size_units' => 'grams',
		'expected_remaining' => $faker->randomNumber,
		'inventory_remaining' => $faker->randomNumber,
		'inventory_date' => $faker->date
	];
});