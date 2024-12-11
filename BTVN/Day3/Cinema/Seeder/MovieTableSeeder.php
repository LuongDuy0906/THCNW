<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Illuminate\Support\Facades\DB;

    class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
            for ($i = 0; $i < 100; $i++) {
                DB::table('movies')->insert([
                'title' => $faker->word,
                'director' => $faker->name,
                'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'duration' => $faker->numberBetween($min = 120, $max = 180),
                'cinema_id' => $faker->numberBetween($min = 1, $max=10),
            ]);
        }
    }
}
