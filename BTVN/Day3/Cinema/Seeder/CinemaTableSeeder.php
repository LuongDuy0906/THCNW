<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Illuminate\Support\Facades\DB;

    class CinemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
            for ($i = 0; $i < 10; $i++) {
                DB::table('cinemas')->insert([
                'name' => $faker->company,
                'location' => $faker->address,
                'total_seats' => $faker->numberBetween($min = 200, $max = 500)
            ]);
        }
    }
}
