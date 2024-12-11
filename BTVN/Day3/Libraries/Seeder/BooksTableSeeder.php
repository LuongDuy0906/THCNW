<?php
    namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Faker\Factory as Faker;
    use Illuminate\Support\Facades\DB;

    class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
            for ($i = 0; $i < 100; $i++) {
                DB::table('books')->insert([
                    'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'author' => $faker->name,
                    'publication_year' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'genre' => $faker->word,
                    'library_id' => $faker->numberBetween($min = 101, $max = 110)
            ]);
        }
    }
}
