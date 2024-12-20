<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class IssueSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 70; $i++) {
            DB::table('issues')->insert([
                'computer_id' => $faker->numberBetween($min = 1, $max = 100),
                'reported_by' => $faker->name,
                'reported_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'description' => $faker->text,
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']),
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved'])
            ]);
        }
    }
}
