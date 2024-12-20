<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ComputerSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('computers')->insert([
                'computer_name' => 'Lab' . $faker->numberBetween($min = 1, $max = 100) . '-PC' . $faker->numberBetween($min = 1, $max = 100),
                'model' => $faker->randomElement(['Dell Inspiron 5410', 'Macbook Air', 'Lenovi Ideapad 5', 'Macbook M1', 'Asus Vivobook 14', 'MSI Modern 15']),
                'operating_system' => $faker->randomElement(['Win 10', 'Win 11', 'Mac OS']),
                'processor' => $faker->randomElement(['I3', 'I5', 'A13']),
                'memory' => $faker->randomElement([8, 16, 32]),
                'available' => $faker->numberBetween($min = 0, $max = 1)
            ]);
        }
    }
}
