<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PaymentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 20) as $index)
		{
			Payments::create([

				'clients_id' => $faker->numberBetween($min = 1, $max = 20),
				'type' => $faker->sentence($nbWords = 4),
				'pay_type' => $faker->creditCardType,
				'cost' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 100),
				'about' => $faker->sentence($nbWords = 6),
				'notes' => $faker->sentence($nbWords = 9),
				'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),


			]);
		}
	}

}