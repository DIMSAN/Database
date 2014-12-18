<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClientsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 1000) as $index)
		{
			Clients::create([

				'client_name' => $faker->company,
				'payment_to_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'update_cost' => $faker->randomFloat($nbMaxDecimals = 5, $min = 0, $max = 100),
				'fact_adress' => $faker->address,
				'telephone' => $faker->phoneNumber,
				'e_mail' => $faker->email,
				'distr' => $faker->numberBetween($min = 1000, $max = 900000),
				'contact_person' => $faker->name,
			]);
		}
	}

}