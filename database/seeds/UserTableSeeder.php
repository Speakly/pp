<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $array = array(
        	0 => 'Ailier',
        	1 => 'Pivot',
        	2 => 'Meneur',
        	3 => 'Ailier Fort',
        	4 => 'Arrière');

        $faker = Faker\Factory::create();

		for($i=1; $i<=50;$i++)
		{
			$rand = rand(0,4);
			$poste = $array[$rand];


			User::create([
				'name'       => $faker->lastname,
				'surname'    => $faker->firstName,
				'poste'      => $poste,
				'club_id'    => rand(0,100),
				'email'      => $faker->email,
				'password'   => $faker->password
			]);
		}

	}
}
