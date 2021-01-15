<?php

namespace Database\Seeders;

use App\Models\Personal;
use App\Models\Salary;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i <= 100; $i++) {
            $personal = Personal::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName
            ]);

            for ($y = 0; $y <= rand(10, 30); $y++) {
                $salary = Salary::create([
                    'amount' => rand(500, 10000),
                    'date_of_issue' => $faker->dateTimeBetween('-3 years'),
                ]);

                $personal->salaries()->attach($salary);
            }
        }
    }
}
