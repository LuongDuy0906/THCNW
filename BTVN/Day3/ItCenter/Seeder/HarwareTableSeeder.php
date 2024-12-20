<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Illuminate\Support\Facades\DB;

    class HarwareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
            for ($i = 0; $i < 100; $i++) {
                DB::table('hardware_device')->insert([
                'device_name' => $faker->company,
                'type' => $faker->word,
                'status' => $faker->numberBetween($min = 0, $max = 1),
                'center_id' => $faker->numberBetween($min = 1, $max = 10)
            ]);
        }
    }
}
