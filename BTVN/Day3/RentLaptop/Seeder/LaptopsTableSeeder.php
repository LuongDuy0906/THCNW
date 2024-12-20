<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Illuminate\Support\Facades\DB;

    class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
            for ($i = 0; $i < 100; $i++) {
                DB::table('laptops')->insert([
                'brand' => $faker->company,
                'model' => $faker->catchPhrase,
                'specifications' => $faker->text($maxNbChars = 10, $indexSize = 2),
                'rental_status' => $faker->numberBetween($min = 0, $max = 1),
                'renter_id' => $faker->numberBetween($min = 1, $max = 10)
            ]);
        }
    }
}
