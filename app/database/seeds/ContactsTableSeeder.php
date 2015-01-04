<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Contacts::create([

				'clients_id' => $faker->numberBetween($min = 1, $max = 20),
				'veids' => $faker->sentence($nbWords = 4),
				'contact_p' => $faker->name,
				'comment' => $faker->sentence($nbWords = 9),
				'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),


			]);
		}
	}

}